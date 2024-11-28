<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        $credentials  = $request->validate([
            'name_funcionario' => ['required'],
            'email' => ['required', 'email'],
        ], [
            'name_funcionario' => 'Coloque o nome do usuario',
            'email.required' => 'Esse email tem que ser preenchido',
        ]);

        $remember = $request->has('remember');
        if (Auth::guard('web')->attempt([
            'email' => $credentials['email'],
        ], $remember)) {
            $request->session()->regenerate();
            return redirect()->route('index');
        } else {
            return back()->withErrors([
                'email' => 'As credenciais fornecidas estão incorretas.',
            ])->onlyInput('email');
        }
    }
}
