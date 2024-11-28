<?php

namespace App\Http\Controllers;

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
            'name' => ['required'],
            'email' => ['required', 'email'],
        ], [
            'name.required' => 'Você precisa digitar o nome do aluno',
            'email.required' => 'Você precisa digitar o email',
            'email.email' => 'Precisa digitar um email',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return view('index');
    }
}
