<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Main extends Controller
{
    public function index()
    {
        return view('index');
    }
}
