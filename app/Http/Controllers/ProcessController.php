<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index()
    {

        return view('process');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
