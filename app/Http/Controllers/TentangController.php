<?php

namespace App\Http\Controllers;

use App\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TentangController extends Controller
{
    public function index()
    {
        $data = Tentang::first();
        return view('admin.tentang.index', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $attr = $req->all();
        $data = Tentang::find($id);

        if ($req->hasFile('file')) {
            $validator = Validator::make($req->all(), [
                'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            if ($validator->fails()) {
                toastr()->error('File Harus Berupa Gambar');
                return back();
            } else {
                $path = '/public/' . $data->file;
                Storage::delete($path);

                $filename = $req->file->getClientOriginalName();
                $filename = date('d-m-Y-') . rand(1, 9999) . $filename;
                $req->file->storeAs('/public', $filename);
                $attr['file'] = $filename;
                $data->update($attr);
                toastr()->success('Berhasil Di Simpan');
                return redirect('/data/tentang-kami');
            }
        } else {
            $filename = $data->file;
            $attr['file'] = $filename;
            $data->update($attr);
            toastr()->success('Berhasil Di Simpan');
            return redirect('/data/tentang-kami');
        }
        return back();
    }
}
