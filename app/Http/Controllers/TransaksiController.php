<?php

namespace App\Http\Controllers;

use App\Sewa;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = Sewa::get();
        return view('admin.transaksi.index', compact('data'));
    }

    public function setujui($id)
    {
        $u = Sewa::find($id);
        $u->status = 1;
        $u->save();
        toastr()->success('Pesanan Telah DiSetujui');
        return back();
    }

    public function hapus($id)
    {
        $u = Sewa::find($id)->delete();
        toastr()->success('Pesanan Telah Dihapus');
        return back();
    }

    public function tolak($id)
    {
        $u = Sewa::find($id);
        $u->status = 2;
        $u->save();
        toastr()->success('Pesanan Telah Ditolak');
        return back();
    }

    public function proses($id)
    {
        $u = Sewa::find($id);
        $u->status = 0;
        $u->save();
        toastr()->success('Pesanan Telah Di Proses Kembali');
        return back();
    }
    
    public function dp(Request $req)
    {
        $data = Sewa::find($req->id_transaksi);
        $data->dp = $req->dp;
        $data->save();
        toastr()->success('DP Telah Di Simpan');
        return back();
    }

    public function lunas(Request $req)
    {
        $data = Sewa::find($req->id_transaksi);
        $data->lunas = $req->dp;
        $data->save();
        toastr()->success('Pelunasan Telah Di Simpan');
        return back();
    }
}
