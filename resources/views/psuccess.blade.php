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
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet"> @notifyCss

</head>



<body class="h-full">

     <script>
        setTimeout(function() {
            window.location.href = "home"
        }, 10000); // 10 seconds
     </script>


    <x:notify-messages /> @notifyJs
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <img class="mx-auto h-50 w-auto" src="{{ asset('imgs/sapiens.svg') }}" alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                   All good! Phone Verified.
                </h2>
                <p class="mt-2 text-center text-sm text-green-500">
                    Your phone number was verified successfully! You will be redirected shortly.

                </p>
            </div>

            <div class="mt-8 space-y-6">

                <a href=" {{(route('home'))}}" class="no-underline">


            </div>
            <div class="text-sm text-center mt-3">



            </div>


        </div>
    </div>
    </div>

</body>
