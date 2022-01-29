@extends('layouts.app')


@extends('layouts.app')



<!doctype html>
<html class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/icons.js') }}" defer></script>
    <script src="{{ asset('js/pace.js') }}" defer></script>

    <!-- Stylesheets -->
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet">


</head>



<body class="h-full">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                    alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Reset your password
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                   Your new password should be different from previously used passwords.

                </p>
            </div>
            @if (session('status'))

                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="rounded-md  -space-y-px">
                    <div hidden>
                        <label for="email"
                            class=" block text-sm text-gray-800 dark:text-gray-200">{{ __('E-Mail Address') }}</label>
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ $email ?? old('email') }}"
                            required
                            class=" disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 @error('email') is-invalid @enderror"
                            placeholder="Enter your email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="password"
                            class=" block text-sm text-gray-800 dark:text-gray-200">{{ __('Password') }}</label>
                        <input id="password" name="password" type="password" autocomplete="new-password"
                            required
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 @error('password') is-invalid @enderror"
                            placeholder="Password" >
                        
                    </div>


                    <div>
                        <label for="password-confirm"
                            class="mt-3 block text-sm text-gray-800 dark:text-gray-200">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" name="password_confirmation" type="password" autocomplete="new-password"
                            required
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 @error('password') is-invalid @enderror"
                            placeholder="Confirm password" >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div>
                        <button type="submit"
                            class="group relative mt-4 w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <!-- Heroicon name: solid/lock-closed -->
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                    <div class="text-sm text-center mt-3">
                        
                        <a href="{{route('login')}}" class="font-medium text-gray-600 hover:text-indigo-500 no-underline ">
                            <i class="fas fa-arrow-left"></i>
                            {{__('Back to Login')}}
                        </a>
                        
                      </div>

                      
            </form>
        </div>
    </div>

</body>





