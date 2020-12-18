<?php

namespace App\Http\Controllers;

use App\Sewa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function userJson()
    {
        $data = User::get();
        return json_encode($data, true);
    }
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {

            $jadwalGedung1 = Sewa::where('gedung', '1')->where('status', '1')->get()->map(function ($item) {
                $data = array();
                $data['id'] = $item->id;
                $data['title'] = $item->nama_acara . ', Dipesan Oleh:' . $item->nama;
                $data['start'] = $item->tanggal;
                $data['className'] = 'event-green';
                return $data;
            })->toArray();

            $jadwalGedung2 = Sewa::where('gedung', '2')->where('status', '1')->get()->map(function ($item) {
                $data = array();
                $data['id'] = $item->id;
                $data['title'] = $item->nama_acara . ', Dipesan Oleh:' . $item->nama;
                $data['start'] = $item->tanggal;
                $data['className'] = 'event-green';
                return $data;
            })->toArray();
            return view('admin.dashboard.index', compact('jadwalGedung1', 'jadwalGedung2'));
        } else {
            $jadwalGedung1 = Sewa::where('gedung', '1')->where('status', '1')->get()->map(function ($item) {
                $data = array();
                $data['id'] = $item->id;
                $data['title'] = $item->nama_acara . ', Dipesan Oleh:' . $item->nama;
                $data['start'] = $item->tanggal;
                $data['className'] = 'event-green';
                return $data;
            })->toArray();

            $jadwalGedung2 = Sewa::where('gedung', '2')->where('status', '1')->get()->map(function ($item) {
                $data = array();
                $data['id'] = $item->id;
                $data['title'] = $item->nama_acara . ', Dipesan Oleh:' . $item->nama;
                $data['start'] = $item->tanggal;
                $data['className'] = 'event-green';
                return $data;
            })->toArray();
            $user = User::all();
            return view('admin.dashboard.index_pelanggan', compact('jadwalGedung1', 'jadwalGedung2', 'user'));
        }
    }

    public function gantipass()
    {
        $data = Auth::user();
        return view('admin.dashboard.gantipass', compact('data'));
    }

    public function updatepass(Request $req)
    {
        if ($req->password != $req->password2) {
            toastr()->error('Password Tidak Sesuai');
        } else {
            $u = Auth::user();
            $u->password = bcrypt($req->password);
            $u->save();
            toastr()->success('Password Berhasil Di Update');
        }
        return back();
    }
}
