<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('correo', 'password');

    if (Auth::attempt(['correo' => $credentials['correo'], 'password' => $credentials['password']])) {
        // Autenticación exitosa
        return redirect()->intended('dashboard');
    }

    // Autenticación fallida
    return redirect()->back()->withErrors([
        'correo' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
    ]);
}

}
