<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class c_login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rental.login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            //sukses
            return redirect('/dashboard');
        }else {
            return redirect('/')->withErrors('Email atau password yang anda masukkan tidak valid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('rental.register');
    }

    public function create(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        $request->validate([
            'email' => 'required | email | unique:users',
            'name' => 'required',
            'password' => 'required | min:6',
        ],[
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah pernah digunakan',
            'password.min' => 'Minimal password 6 karakter',
        ]);

        $data = [
            'name' =>$request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            //sukses
            return redirect('/dashboard');
        }else {
            return redirect('/')->withErrors('Email atau password yang anda masukkan tidak valid');
        }
    }
}
