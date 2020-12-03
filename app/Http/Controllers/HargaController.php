<?php

namespace App\Http\Controllers;

use App\Harga;
use Illuminate\Http\Request;

class HargaController extends Controller
{
    public function index()
    {
        $data = Harga::all();
        return view('admin.harga.index', compact('data'));
    }

    public function edit($id)
    {
        $data =  Harga::find($id);
        return view('admin.harga.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $data =  Harga::find($id);
        $data->update($req->all());
        return redirect('/data/harga');
    }
}
