@extends('layouts.app')



<!doctype html>
<html class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/icons.js') }}" cross-origin="anonymous" defer></script>
    <script src="{{ asset('js/pace.js') }}" defer></script>

    <!-- Stylesheets -->
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet">

    @notifyCss

</head>



<body class="h-full">

      
        <x:notify-messages />
        @notifyJs
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                    alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                   Password Reset
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Your password has been successfully reset. Click below to login magically

                </p>
            </div>
         
            <div class="mt-8 space-y-6">
               
                <a href=" {{(route('home'))}}" class="no-underline">
                    <div>
                        
                        <button  
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
                           {{ __(' Continue') }}
                        </button>
                    </div>
                   
                    </div>
                    <div class="text-sm text-center mt-3">
                        
                        <a href="{{route('logout')}}" class="font-medium text-gray-600 hover:text-indigo-500 no-underline ">
                            <i class="fas fa-arrow-left"></i>
                            {{__('Back to Login')}}
                        </a>
                        
                      </div>

                      
            </div>
        </div>
    </div>

</body>
