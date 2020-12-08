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

    public function tolak($id)
    {
        $u = Sewa::find($id);
        $u->status = 2;
        $u->save();
        toastr()->success('Pesanan Telah Ditolak');
        return back();
    }
}
