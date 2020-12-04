<?php

namespace App\Http\Controllers;

use App\Sewa;
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
            $jadwalGedung1 = Sewa::where('gedung', '1')->where('status', '1')->get()->map(function ($item) {
                $data = array();
                $data['id'] = $item->id;
                $data['title'] = $item->nama_acara;
                $data['start'] = $item->tanggal;
                $data['className'] = 'event-green';
                return $data;
            })->toArray();

            $jadwalGedung2 = Sewa::where('gedung', '2')->where('status', '1')->get()->map(function ($item) {
                $data = array();
                $data['id'] = $item->id;
                $data['title'] = $item->nama_acara;
                $data['start'] = $item->tanggal;
                $data['className'] = 'event-green';
                return $data;
            })->toArray();

            return view('admin.dashboard.index_pelanggan', compact('jadwalGedung1', 'jadwalGedung2'));
        }
    }

    public function gantipass()
    {
        return view('admin.dashboard.gantipass');
    }
}
