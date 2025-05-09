<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // Jika pengguna sudah login, arahkan ke beranda admin atau halaman lainnya
            return redirect('/admin/beranda/1');
        }
        $data = [
            'title' => 'Sign In'
        ];
        return view('admin.login.index', $data);
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            if (Auth::user()) {
                return redirect('/admin/beranda/1');
            }
        } else {
            Session::flash('error', 'Email or Password is incorrect.');
            return redirect('/admin');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
