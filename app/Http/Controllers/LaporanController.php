<?php

namespace App\Http\Controllers;

use App\Sewa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function gd1Tanggal()
    {
        $mulai = Carbon::parse(request()->get('mulai'))->format('Y-m-d')." 00:00:00";
        $sampai = Carbon::parse(request()->get('sampai'))->format('Y-m-d')." 23:59:59";
        $data = Sewa::whereBetween('created_at', [$mulai, $sampai])->where('gedung', '1')->where('status', '1')->get();

        return view('admin.laporan.gd1.tanggal',compact('data', 'mulai', 'sampai'));   
    }
    
    public function gd2Tanggal()
    {
        $mulai = Carbon::parse(request()->get('mulai'))->format('Y-m-d')." 00:00:00";
        $sampai = Carbon::parse(request()->get('sampai'))->format('Y-m-d')." 23:59:59";
        $data = Sewa::whereBetween('created_at', [$mulai, $sampai])->where('gedung', '2')->where('status', '1')->get();

        return view('admin.laporan.gd2.tanggal',compact('data', 'mulai', 'sampai'));   
    }

    public function gd1bulan()
    {
        $bulan = request()->get('bulan');
        $tahun = request()->get('tahun');
        $data = Sewa::whereYear('tanggal', '=', $tahun)->whereMonth('tanggal', '=', $bulan)->where('gedung', '1')->where('status', '1')->get();
        $namabulan = '';
        if($bulan == '01'){
            $namabulan = 'Januari';
        }elseif($bulan == '02'){
            $namabulan = 'Februari';
        }elseif($bulan == '03'){
            $namabulan = 'Maret';
        }elseif($bulan == '04'){
            $namabulan = 'April';
        }elseif($bulan == '05'){
            $namabulan = 'Mei';
        }elseif($bulan == '06'){
            $namabulan = 'Juni';
        }elseif($bulan == '07'){
            $namabulan = 'Juli';
        }elseif($bulan == '08'){
            $namabulan = 'Agustus';
        }elseif($bulan == '09'){
            $namabulan =  'September';
        }elseif($bulan == '10'){
            $namabulan = 'Oktober';
        }elseif($bulan == '11'){
            $namabulan = 'November';
        }elseif($bulan == '12'){
            $namabulan = 'Desember';
        }
        return view('admin.laporan.gd1.bulan',compact('data', 'namabulan', 'tahun'));   
    }

    public function gd1tahun()
    {
        $tahun = request()->get('tahun');
        $data = Sewa::whereYear('tanggal', '=', $tahun)->where('gedung', '1')->where('status', '1')->get();
        return view('admin.laporan.gd1.tahun',compact('data', 'tahun'));   
    }
    
    public function gd2bulan()
    {
        $bulan = request()->get('bulan');
        $tahun = request()->get('tahun');
        $data = Sewa::whereYear('tanggal', '=', $tahun)->whereMonth('tanggal', '=', $bulan)->where('gedung', '2')->where('status', '1')->get();
        $namabulan = '';
        if($bulan == '01'){
            $namabulan = 'Januari';
        }elseif($bulan == '02'){
            $namabulan = 'Februari';
        }elseif($bulan == '03'){
            $namabulan = 'Maret';
        }elseif($bulan == '04'){
            $namabulan = 'April';
        }elseif($bulan == '05'){
            $namabulan = 'Mei';
        }elseif($bulan == '06'){
            $namabulan = 'Juni';
        }elseif($bulan == '07'){
            $namabulan = 'Juli';
        }elseif($bulan == '08'){
            $namabulan = 'Agustus';
        }elseif($bulan == '09'){
            $namabulan =  'September';
        }elseif($bulan == '10'){
            $namabulan = 'Oktober';
        }elseif($bulan == '11'){
            $namabulan = 'November';
        }elseif($bulan == '12'){
            $namabulan = 'Desember';
        }
        return view('admin.laporan.gd2.bulan',compact('data', 'namabulan', 'tahun'));   
    }

    public function gd2tahun()
    {
        $tahun = request()->get('tahun');
        $data = Sewa::whereYear('tanggal', '=', $tahun)->where('gedung', '2')->where('status', '1')->get();
        return view('admin.laporan.gd2.tahun',compact('data', 'tahun'));   
    }
}
