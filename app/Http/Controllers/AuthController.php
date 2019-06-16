<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function getLogin() {
        return view('pages.login');
    }

    public function postLogin(Request $req) {
        if ($req->email == null or $req->password == null) {
            return redirect()->back()->with(['error' => 'Masukkan Email atau Password !']);
        } else {
            if (Auth::attempt([ 'email' => $req->email, 'password' => $req->password ])) {
                $user = Auth::user();
                return redirect()->route('home');
            } else {
                return redirect()->back()->with(['error' => 'Login Gagal !']);
            }
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
