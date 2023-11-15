<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    /**
     * Write code on Method
     * @param  \illuminate\Http\Request $request
     * @return response()
     */


    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
    public function showme()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {

    //   $request->validate([
    //         'name' => 'required|string|max:250',
    //         'email' => 'required|email|max:250|unique:users',
    //         'password' => 'required|min:8|confirmed'
    //     ]);   vb

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return view('create');
    }
}