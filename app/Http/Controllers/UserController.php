<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users');
    }
    public function create()
    {
        return 'create data';
    }
}
