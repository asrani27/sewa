<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 'wedding', 'title' => 'wedding', 'start' => '2020-12-03', 'className' => 'event-orange'],
            ['id' => 'kawin', 'title' => 'kelulusan', 'start' => '2020-12-04', 'className' => 'event-green']
        ];
        return view('admin.dashboard.index', compact('data'));
    }

    public function gantipass()
    {
        return view('admin.dashboard.gantipass');
    }
}
