<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index ()
    {
        return view('auth.login');
    }

    public function login (Request $request)
    {
        $validated = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt($validated))
        {
            return redirect()->route('admin.index');
        }
    }
}
