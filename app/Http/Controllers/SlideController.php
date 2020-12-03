<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
{
    public function index()
    {
        $data = Slide::all();
        return view('admin.slideshow.index', compact('data'));
    }

    public function add()
    {
        return view('admin.slideshow.add');
    }

    public function store(Request $req)
    {
        $attr = $req->all();

        if ($req->hasFile('file')) {
            $validator = Validator::make($req->all(), [
                'file' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {
                toastr()->error('File Harus Berupa Gambar dan Maksimal 2MB');
                return back();
            } else {
                $filename = $req->file->getClientOriginalName();
                $filename = date('d-m-Y-') . rand(1, 9999) . $filename;
                $req->file->storeAs('/public', $filename);
                $attr['file'] = $filename;
                Slide::create($attr);
                toastr()->success('Berhasil Di Simpan');
                return redirect('/data/slideshow');
            }
        } else {
            $filename = null;
            $attr['file'] = $filename;
            Slide::create($attr);
            toastr()->success('Berhasil Di Simpan');
            return redirect('/data/slideshow');
        }
    }
    public function edit($id)
    {
        $data = Slide::find($id);
        return view('admin.slideshow.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $attr = $req->all();
        $data = Slide::find($id);

        if ($req->hasFile('file')) {
            $validator = Validator::make($req->all(), [
                'file' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {
                toastr()->error('File Harus Berupa Gambar dan Maksimal 2MB');
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
                return redirect('/data/slideshow');
            }
        } else {
            $filename = $data->file;
            $attr['file'] = $filename;
            $data->update($attr);
            toastr()->success('Berhasil Di Simpan');
            return redirect('/data/slideshow');
        }
    }
    public function delete($id)
    {
        Slide::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
