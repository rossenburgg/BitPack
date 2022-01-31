<?php

namespace App\Http\Controllers;
use Illuminate\Notifications\Notification;
use NotificationChannels\Hellio\HellioChannel;
use NotificationChannels\Hellio\HellioMessage;

use Illuminate\Http\Request;

class VerifyPhone extends Controller
{
  /**
     * Show the application phone.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('phone');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


    
    
    }












   
   