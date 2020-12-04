<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $data = [
                ['id' => 'wedding', 'title' => 'wedding', 'start' => '2020-12-03', 'className' => 'event-orange'],
                ['id' => 'kawin', 'title' => 'kelulusan', 'start' => '2020-12-04', 'className' => 'event-green']
            ];
            return view('admin.dashboard.index', compact('data'));
        } else {
            $jadwalGedung1 = [
                ['id' => 'wedding', 'title' => 'wedding', 'start' => '2020-12-03', 'className' => 'event-orange'],
                ['id' => 'kawin', 'title' => 'kelulusan', 'start' => '2020-12-04', 'className' => 'event-green']
            ];
            $jadwalGedung2 = [
                ['id' => 'wedding', 'title' => 'wedding', 'start' => '2020-12-03', 'className' => 'event-orange'],
                ['id' => 'kawin', 'title' => 'kelulusan', 'start' => '2020-12-04', 'className' => 'event-green']
            ];
            return view('admin.dashboard.index_pelanggan', compact('jadwalGedung1', 'jadwalGedung2'));
        }
    }

    public function gantipass()
    {
        return view('admin.dashboard.gantipass');
    }
}
