<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ Auth::user()->name }} | BitPack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/pace.js') }}" defer></script>


    <link href="{{ asset('css/pace.css') }}" rel="stylesheet">

    @notifyCss
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
</head>
<x:notify-messages />
@notifyJs
<body class="relative antialiased bg-gray-100 m-5">

    <!-- Start Nav -->
    <div class="fixed bottom-4 right-4 xl:right-20">
        <a href="https://www.buymeacoffee.com/ejulfaey" target="_blank"
            class="transform duration-500 ease-in-out animate-bounce bg-yellow-400 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4">
            <img class="w-8 h-8 rounded"
                src="https://img.buymeacoffee.com/api/?name=Ejul&size=300&bg-image=bmc&background=5F7FFF"
                alt="dashboard">
            Our Dashboard is working!
        </a>
    </div>
    <nav class="p-4 md:py-8 xl:px-0 md:container md:mx-w-6xl md:mx-auto">
        <div class="hidden lg:flex lg:justify-between lg:items-center">
            <a href="#" class="flex items-start gap-2 group">
                <div class="bg-blue-600 text-white p-2 rounded-md group-hover:bg-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="text-sm font-light uppercase">
                    Dashboard
                    <span class="text-base block font-bold tracking-widest">
                        {{ config('app.name', 'BitPack') }}
                    </span>
                </p>
            </a>
            <ul class="flex items-center space-x-4 text-sm font-semibold">
                <li><a href="#" class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">My Account</a></li>
                <li class="relative" x-data="{ open: false }">
                    <a x-on:click="open = !open" x-on:click.outside="open = false" href="#"
                        class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200 flex gap-2 items-center">
                        Transactions
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 stroke-current stroke-2 text-gray-800 transform duration-500 ease-in-out"
                            :class="open ? 'rotate-90' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg> </a>
                    <ul x-cloak x-show="open" x-transition
                        class="absolute top-10 left-0 bg-white p-4 rounded-md shadow overflow-hidden w-64">
                        <li>
                            <a href="#"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                             Completed
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Pending
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Cancelled
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">Cards </a></li>
                <li><a href="#" class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">NFTs</a></li>
            </ul>
            <ul class="flex space-x-2 xl:space-x-4 text-sm font-semibold">
                <li>
                    <a href="settings">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-gray-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-gray-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-gray-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>

            <ul class="flex items-center gap-6">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="#" class="text-sm font-sans text-gray-800 font-semibold tracking-wider">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                @endguest
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">

                            <div class="p-2 rounded hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-current text-gray-800"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </div>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <div x-data="{ open: false }" class="lg:hidden relative flex justify-between w-full">
            <a href="#" class="flex items-start gap-2 group">
                <div class="bg-blue-600 text-white p-3 rounded-md group-hover:bg-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="text-sm font-light uppercase">
                    Dashboard
                    <span class="text-base block font-bold tracking-widest">
                        {{ config('app.name', 'BitPack') }}
                    </span>
                </p>
            </a>
            <button x-on:click="open = !open" type="button" class="bg-gray-200 p-3 rounded-md">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div x-show="open" x-transition class="absolute top-14 left-0 right-0 w-full bg-white rounded-md border">
                <ul class="p-4">
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            My Account
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            Transactions
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            Cards
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                            Offers
                        </a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <!-- End Nav -->
    <!-- Start Main -->
    <main class="container mx-w-6xl mx-auto py-4">
        <div class="flex flex-col space-y-8">
            <!-- First Row -->
            <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
                <div class="md:col-span-2 xl:col-span-3 bg-white p-6 rounded-2xl border border-gray-50">
                    <div class="flex flex-col space-y-6 md:h-full md:justify-between">
                        <div class="flex justify-between">
                            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                                BitPack Wallet
                            </span>
                            <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                                Available Funds
                            </span>
                        </div>
                        <div class="flex gap-2 md:gap-4 justify-between items-center">
                            <div class="flex flex-col space-y-4">
                                <h2 class="text-gray-800 font-bold tracking-widest leading-tight">
                                    Your Account</h2>
                                <div class="flex items-center gap-4">
                                    <p class="text-lg text-gray-600 tracking-wider">**** **** *321</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </div>
                            </div>
                            <h2 class="text-lg md:text-xl xl:text-3xl text-gray-700 font-black tracking-wider">
                                <span class="md:text-xl">$</span>
                                92,817.45
                            </h2>
                        </div>
                        <div class="flex gap-2 md:gap-4">
                            <a href="/pay"
                                class="bg-blue-600 px-5 py-3 w-full text-center md:w-auto rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-800">
                                Buy Crypto
                            </a>
                            <a href="#"
                                class="bg-blue-50 px-5 py-3 w-full text-center md:w-auto rounded-lg text-blue-600 text-xs tracking-wider font-semibold hover:bg-blue-600 hover:text-white">
                                Sell Crypto
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-2 p-6 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-800 flex flex-col justify-between">
                    <div class="flex flex-col">
                        <p class="text-white font-bold">Important News</p>
                        <p class="mt-1 text-xs md:text-sm text-gray-50 font-light leading-tight max-w-sm">
                            We will be opening Bitpack soon. We are actively working on deploying bots that will make
                            your crypto trading fun and easier!
                        </p>
                    </div>
                    <div class="flex justify-between items-end">
                        <a href="#"
                            class="bg-blue-800 px-4 py-3 rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-600 hover:text-white">
                            Learn More
                        </a>
                        <img src="{{ URL::to('/') }}/imgs/calender.png" alt="hand" class="w-auto h-24 object-cover">
                    </div>
                </div>

            </div>
            <!-- End First Row -->
            <!-- Start Second Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                    <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                        Expenses By Category</h2>
                    <a href="#" class="text-xs text-gray-800 font-semibold uppercase">More</a>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Buy Orders</p>
                            <h3 class="mt-1 text-lg text-blue-500 font-bold">$ 818</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Hours ago</span>
                        </div>
                        <div class="bg-blue-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="{{ URL::to('/') }}/imgs/bought.png" alt="icon"
                                class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Sell Orders</p>
                            <h3 class="mt-1 text-lg text-green-500 font-bold">$ 8,918</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Days ago</span>
                        </div>
                        <div class="bg-red-100 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="{{ URL::to('/') }}/imgs/sold.png " alt="icon"
                                class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Total </p>
                            <h3 class="mt-1 text-lg text-yellow-500 font-bold">$ 1,223</h3>
                            <span class="mt-4 text-xs text-gray-600">Last Transaction 4 Days ago</span>
                        </div>
                        <div class="bg-indigo-100 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="{{ URL::to('/') }}/imgs/total.png" alt="icon"
                                class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 tracking-wide">Wallet Balance</p>
                            <h3 class="mt-1 text-lg text-indigo-500 font-bold">$ 5,918</h3>
                            <span class="mt-4 text-xs text-gray-500">Last Transaction 1 Month ago</span>
                        </div>
                        <div class="bg-indigo-500 p-2 md:p-1 xl:p-2 rounded-md">
                            <img src="{{ URL::to('/') }}/imgs/wallet.png " alt="wallet"
                                class="w-auto h-8 md:h-6 xl:h-8 object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Second Row -->
            <!-- Start Third Row -->
            <div class="grid grid-cols-1 md:grid-cols-5 items-start px-4 xl:p-0 gap-y-4 md:gap-6">
                <div class="col-start-1 col-end-5">
                    <h2 class="text-xs md:text-sm text-gray-800 font-bold tracking-wide">Summary Transactions</h2>
                </div>
                <div class="col-span-2 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 flex justify-between items-center">
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Daily</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 27.80</h2>
                        </div>
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Weekly</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 192.92</h2>
                        </div>
                        <div class="p-4 cursor-pointer border">
                            <span class="text-xs text-gray-500 font-semibold">Monthly</span>
                            <h2 class="text-gray-800 font-bold tracking-wider">$ 501.10</h2>
                        </div>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-sm text-gray-600 font-bold tracking-wide">Latest Transactions</h2>
                        <a href="#"
                            class="px-4 py-2 text-xs bg-blue-100 text-blue-500 rounded uppercase tracking-wider font-semibold hover:bg-blue-300">More</a>
                    </div>
                    <ul class="divide-y-2 divide-gray-100 overflow-x-auto w-full">
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bitcoin</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Buy</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bitcoin</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Buy</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bitcoin</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Sell</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bitcoin</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Buy</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bitcoin</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Buy</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                        <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                            <p class="px-4 font-semibold">Today</p>
                            <p class="px-4 text-gray-600">Bitcoin</p>
                            <p class="px-4 tracking-wider">Cash</p>
                            <p class="px-4 text-blue-600">Sell</p>
                            <p class="md:text-base text-gray-800 flex items-center gap-2">
                                16.90
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Third Row -->
        </div>
    </main>
    <!-- End Main -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        const data = {
            labels: [
                'Buy Orders',
                'Sell Orders',
                'Total Orders',
                'Wallet Balance',
            ],
            datasets: [{
                label: 'Total Expenses',
                data: [148, 150, 130, 170],
                backgroundColor: [
                    '#3B82F6',
                    '#10B981',
                    '#6366F1',
                    '#F59E0B'
                ]
            }]
        };

        const config = {
            type: 'polarArea',
            data: data,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        };

        const chart = new Chart(ctx, config);

        $('#logout-button').on('click', function(e) {
            e.preventDefault();
            $('#logout-form').submit();
        });
    </script>


</body>

</html>
