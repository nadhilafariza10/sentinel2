<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Sentinel::authenticate($request->all);
        // return view('Pemilik.Home');
        $user = [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (\Sentinel::authenticate($user)) {
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect('/');
    }
}
