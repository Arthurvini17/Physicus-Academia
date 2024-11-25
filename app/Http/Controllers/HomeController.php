<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_home()
    {
        return view('index');
    }

    public function render(){
        return view('layouts.app');
    }
}
