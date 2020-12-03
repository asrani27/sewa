<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Toastr;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/home');
        } else {
            return view('login');
        }
    }

    public function login(Request $req)
    {
        if (Auth::attempt(['username' => $req->username, 'password' => $req->password])) {
            if ($req->user()->hasRole('admin')) {
                return redirect('/home');
            }
            if ($req->user()->hasRole('user')) {
                dd('skpd');
            }
        } else {
            toastr()->error('Username / Password Tidak Ditemukan');
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
