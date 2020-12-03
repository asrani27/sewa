<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = Kontak::first();
        return view('admin.kontak.index', compact('data'));
    }

    public function update(Request $req)
    {
        $data = Kontak::first()->update($req->all());
        toastr()->success('Kontak Berhasil Di Update');
        return back();
    }
}
