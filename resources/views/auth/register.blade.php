@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/app.js') }}" defer></script>

    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image2"></div>
            <div class="col-md-8 col-lg-6">
                <div class="signup d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="signup-heading mb-4">{{ __('Create An Account') }}</h3>

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
                                @endif

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-floating mb-3">

                                        <input id="floatingInput" type="text" placeholder="John Doe"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <label for="floatingInput">{{ __('Name') }}</label>

                                    </div>

                                    <div class="form-floating mb-3">
                                        <input id="floatingInput" type="email" placeholder="name@example.com"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        <label for="floatingInput">{{ __('E-Mail') }}</label>

                                    </div>

                                    <div class="form-floating mb-3">
                                        <input id="floatingInput" type="phone" placeholder="+233****"
                                            class="form-control @error('phone') is-invalid @enderror" name="mobile_number"
                                            required autocomplete="phone">

                                        <label for="floatingInput">{{ __('Mobile Number') }}</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input id="floatingPassword" type="password" placeholder="Password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        <label for="floatingPassword">{{ __('Password') }}</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input id="floatingPassword" type="password" class="form-control"
                                            placeholder="Confirm Password" name="password_confirmation" required
                                            autocomplete="new-password">
                                        <label for="floatingPassword">{{ __('Confirm Password') }}</label>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit"
                                            class="btn btn-lg btn-primary btn-signup text-uppercase fw-bold mb-2">
                                            {{ __('Sign Up') }}
                                        </button>
                                        <div class="text-center">
                                            <a class="small">Already Have An Account? <a
                                                    href="{{ route('login') }}">{{ __('Log In') }}</a>
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
