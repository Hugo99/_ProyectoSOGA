<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);


        if(Auth::attempt($credentials))
        {
            return redirect()->route('menu');
        }

        return back()
        ->withErrors(['username' => 'Estas credenciales no coinciden con nuestros registros'])
        ->withInput(request(['username']));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
