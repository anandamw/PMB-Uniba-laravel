<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        // ddd($request->all());
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'EMAIL WAJIB DI ISI',
                'password.required' => 'PASSWORD WAJIB DI ISI  ',
            ],
        );

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('dashboard');
            } elseif (Auth::user()->role == 'mahasiswa') {
                return redirect('/');
            }
        } else {
            return redirect('login')->withErrors('PASSWORD ATAU EMAIL SALAH ')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
