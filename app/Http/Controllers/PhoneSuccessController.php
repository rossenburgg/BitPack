<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneSuccessController extends Controller
{
    public function index()
    {
        smilify('success', 'Your Phone Number was successfully verified!.');
       
        return view('psuccess');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
