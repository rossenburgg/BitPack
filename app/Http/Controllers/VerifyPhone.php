<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyOTPRequest;
use App\Models\UserOtp;
use App\Notifications\OTPSMSNotification;
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

    public function verify(VerifyOTPRequest $request)
    {



        $otp = UserOtp::where(['user_id'=> auth()->id(),'code' => $request->otpcode])->first();
        if($otp->hasExpired()){
            $otp->delete();
             return ('code expired please generate new one.');
        }

        $otp->delete();

        return redirect('home');

    }

// Resend code
    public function resendOTP(){
        $otpCode = UserOtp::generateCode();
        $user = auth()->user();
        $user->notify(new OTPSMSNotification($otpCode));
        $user->otpCode()->create([
            'code' => $otpCode
        ]);
        return ('code sent');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }







    }













