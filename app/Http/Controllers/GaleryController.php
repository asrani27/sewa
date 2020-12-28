<?php

namespace App\Http\Controllers;

use App\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GaleryController extends Controller
{
    public function index()
    {
        $data = Galery::all();
        return view('admin.galery.index', compact('data'));
    }

    public function add()
    {
        return view('admin.galery.add');
    }

    public function store(Request $req)
    {
        $attr = $req->all();

        if ($req->hasFile('file')) {
            $validator = Validator::make($req->all(), [
                'file' => 'mimes:jpeg,png,jpg,gif,svg|max:4048',
            ]);

            if ($validator->fails()) {
                toastr()->error('File Harus Berupa Gambar dan Maksimal 2MB');
                return back();
            } else {
                $filename = $req->file->getClientOriginalName();
                $filename = date('d-m-Y-') . rand(1, 9999) . $filename;
                $req->file->storeAs('/public', $filename);
                $attr['file'] = $filename;
                Galery::create($attr);
                toastr()->success('Berhasil Di Simpan');
                return redirect('/data/galery');
            }
        }
    }

    public function delete($id)
    {
        $path = '/public/' . Galery::find($id)->file;
        Storage::delete($path);
        Galery::find($id)->delete();
        return back();
    }
}
