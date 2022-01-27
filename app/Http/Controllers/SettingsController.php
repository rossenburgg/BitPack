<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // Validating
    public function index()
    {
        return view("settings");
    }
    public function __construct()
    {
        $this->middleware('auth');
    }


}
