<?php

namespace App\Http\Controllers;

use App\Sewa;
use App\Harga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    public function gedungRaya1(Request $req)
    {
        $check = Sewa::where('gedung', '1')->where('tanggal', $req->tanggal)->first();
        if ($check == null) {
            $attr = $req->all();
            $attr['user_id'] = Auth::user()->id;
            $attr['gedung'] = '1';
            $attr['harga'] = Harga::find(1)->harga;
            Sewa::create($attr);
            toastr()->success('Pemesanan berhasil Di Simpan, Menunggu Konfirmasi Admin');
            return back();
        } else {
            toastr()->info('Tanggal Ini Telah Di Pesan, Silahkan Cari Tanggal lain');
            return back();
        }
    }

    public function gedungRaya2(Request $req)
    {
        $check = Sewa::where('gedung', '2')->where('tanggal', $req->tanggal)->first();
        if ($check == null) {
            $attr = $req->all();
            $attr['user_id'] = Auth::user()->id;
            $attr['gedung'] = '2';
            $attr['harga'] = Harga::find(2)->harga;
            Sewa::create($attr);
            toastr()->success('Pemesanan berhasil Di Simpan, Menunggu Konfirmasi Admin');
            return back();
        } else {
            toastr()->info('Tanggal Ini Telah Di Pesan, Silahkan Cari Tanggal lain');
            return back();
        }
    }

    public function pesananSaya()
    {
        $data = Sewa::where('user_id', Auth::user()->id)->get();
        return view('pemesan.pesanan', compact('data'));
    }
}
