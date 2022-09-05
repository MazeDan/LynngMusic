<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome',
            ['id' => 5]);
    }

    public function dashboard(){
        return view('dashboard',
            ['id' => 5]);
    }
}
