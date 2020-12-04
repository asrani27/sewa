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
}
