@extends('layouts.app')

@section('content')

<div class="d-md-flex h-md-100 align-items-center">

    <!-- First Half -->
    <div class="col-md-6 p-0 bg-indigo h-md-100">
        <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
            <div class="logoarea pt-5 pb-5">
            </div>
        </div>
    </div>
    

    <!-- Second Half -->
    <div class="col-md-6 p-0 bg-white h-md-100 loginarea">
        <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
        </div>
    </div>
        
</div>

<div class="wrapper">
    
    <div class="bottom">
    <div class="mes">
@if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
</div>

      <div class="info">
        <h3 class="header"> {{ __('Verify Your Email ') }} </h3>
      </div>
      
      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
       <small class="text-muted">You will need to verify your email to complete registration</small> <br/>
           <img class="img" src="https://freesvg.org/img/ocal2.png">

                <div class="card-body text-muted">
                   

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
           
        </div>
   

      
    </div>
  </div>
</div>

@endsection
