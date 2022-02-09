@extends('layouts.app')

@section('content')

    <script src="{{ asset('js/app.js') }}" defer></script>
    <div class="container-fluid ps-md-0 ">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">

                                <!-- Error messages -->

                                <h3 class="login-heading mb-4">{{ __('Welcome Back!') }}</h3>
                                <div class="container w-100 p-0">
                                    @if (session('message'))
                                        <div class="alert alert-danger">{{ session('message') }}
                                    @endif
                                </div>
                                @if ($errors->first())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                            </div>
                            @endif
                            <!-- Error messages end -->

                            <!-- Sign In Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input id="floatingInput" type="text" placeholder="name@example.com"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="floatingInput">{{ __('Email') }}</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input id="floatingInput" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <label for="floatingInput">{{ __('Password') }}</label>
                                </div>


                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>



                                <div class="d-grid">

                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2">
                                        {{ __('Sign In') }}
                                    </button>


                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <span class="text-center"> New on Bitpack? <a
                                            href="{{ route('register') }}">{{ __('Create An Account') }}</a></span>
                                </div>

                        </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
