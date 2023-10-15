<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        // * validaciones
        $this->validate($request, [
            'email' => 'required|max:100|email',
            'password' => 'required|min:5'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('home');
    }
}
