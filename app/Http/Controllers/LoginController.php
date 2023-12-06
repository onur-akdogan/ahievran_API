<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (auth()->attempt($credentials)) {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->back()->with('error', 'Hata oluştu. Lütfen tekrar deneyiniz.');
            }
        }
    }
}
