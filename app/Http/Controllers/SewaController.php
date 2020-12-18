<?php

namespace App\Http\Controllers;

use App\Sewa;
use App\Harga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function uploadDP(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'file' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);

        if ($validator->fails()) {
            toastr()->info('File Harus Berupa Gambar');
            return back();
        }

        if ($req->hasFile('file')) {
            $filename = $req->file->getClientOriginalName();
            $filename = date('d-m-Y-') . $req->idpesanan . $filename;
            $req->file->storeAs('/public', $filename);
        }

        //Cek File Sebelumnya
        $path = Sewa::find($req->idpesanan)->foto_dp;
        if ($path != null) {
            Storage::delete('/public/' . $path);
        }

        //Update Sewa
        $data = Sewa::find($req->idpesanan);
        $data->foto_dp = $filename;
        $data->save();
        toastr()->success('Bukti Transfer Di Simpan');

        return back();
    }
    public function uploadLunas(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'file' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);

        if ($validator->fails()) {
            toastr()->info('File Harus Berupa Gambar');
            return back();
        }

        if ($req->hasFile('file')) {
            $filename = $req->file->getClientOriginalName();
            $filename = date('d-m-Y-') . $req->idpelunasan . $filename;
            $req->file->storeAs('/public', $filename);
        }

        //Cek File Sebelumnya
        $path = Sewa::find($req->idpelunasan)->foto_sisa;
        if ($path != null) {
            Storage::delete('/public/' . $path);
        }

        //Update Sewa
        $data = Sewa::find($req->idpelunasan);
        $data->foto_sisa = $filename;
        $data->save();
        toastr()->success('Bukti Transfer Di Simpan');

        return back();
    }
}
