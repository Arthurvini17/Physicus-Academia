<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index_register()
    {
        return view('auth.register');
    }

    public function register_user(Request $request)
    {
        $request->validate([
            'name_funcionario' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'name_funcionario.required' => 'Você precisa digitar o nome do aluno',
            'email.required' => 'Você precisa digitar o email',
            'email.email' => 'Precisa digitar um email',
            'password.required' => 'Digite a senha',
        ]);

          Funcionarios::create([
            'name_funcionario' => $request->name_funcionario,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        
        
        return view('index');

    }
}
