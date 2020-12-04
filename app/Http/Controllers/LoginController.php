<?php

namespace App\Http\Controllers;

use Toastr;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect('/home');
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

    public function register()
    {
        return view('register');
    }

    public function storeRegister(Request $req)
    {
        $roleUser = Role::where('name', 'user')->first();
        $checkUsername = User::where('username', $req->username)->first();
        $checkMail = User::where('email', $req->email)->first();
        if ($checkUsername != null) {
            toastr()->error('Username Sudah Di Gunakan, Silahkan Gunakan yang lain');
            return back();
        } elseif ($checkMail != null) {
            toastr()->error('Email Sudah DiGunakan, Silahkan Reset Password Jika Anda Lupa');
            return back();
        } else {
            $attr = $req->all();
            $attr['password'] = bcrypt($req->password);
            $s = User::create($attr);
            $s->roles()->attach($roleUser);
            Auth::login($s);
            toastr()->success('Pendaftaran Berhasil, Silahkan Login');
            return redirect('/home');
        }
    }
}
