<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
   /**
     * Show the application success.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        smilify('success', 'Your password was successfully updated.');

        return view('success');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
