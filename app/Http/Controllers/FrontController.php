<?php

namespace App\Http\Controllers;

use App\Harga;
use App\Slide;
use App\Galery;
use App\Kontak;
use App\Tentang;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        $harga = Harga::all();
        return view('welcome', compact('slide', 'harga'));
    }

    public function tentang()
    {
        $data = Tentang::first();
        return view('tentang', compact('data'));
    }

    public function galery()
    {
        $data = Galery::all();
        return view('galery', compact('data'));
    }

    public function harga()
    {
        $harga = Harga::all();
        return view('harga', compact('harga'));
    }

    public function kontak()
    {
        $kontak = Kontak::first();
        return view('kontak', compact('kontak'));
    }
}
