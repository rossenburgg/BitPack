<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>{{ config('app.name', 'BitPack') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: Nunito Sans;
        }


        @media(max-width: 430px) {
            .card {
                margin: 10px;
            }

            .d-none {
                display: none;
            }

    </style>
</head>

<body>
    <nav class="flex items-center justify-between flex-wrap bg-indigo-800 p-6 fixed w-full z-50">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
            </svg>
            <span class="font-semibold text-xl tracking-tight">Bitpack</span>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-white border-indigo-500 hover:text-white hover:border-white"
                id="navbar-btn">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto " id="navbar">
            <div class="text-sm lg:flex-grow  text-center lg:text-right">
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-5">
                    Buy/Sell
                </a>
                <a href="docs" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-5">
                    Docs
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-5">
                    Media
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-indigo-200 hover:text-white mr-5">
                    <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" id="Outline"
                        viewBox="0 0 24 24" width="512" height="512">
                        <path
                            d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0ZM22,12a9.938,9.938,0,0,1-1.662,5.508l-1.192-1.193A.5.5,0,0,1,19,15.962V15a3,3,0,0,0-3-3H13a1,1,0,0,1-1-1v-.5a.5.5,0,0,1,.5-.5A2.5,2.5,0,0,0,15,7.5v-1a.5.5,0,0,1,.5-.5h1.379a2.516,2.516,0,0,0,1.767-.732l.377-.377A9.969,9.969,0,0,1,22,12Zm-19.951.963,3.158,3.158A2.978,2.978,0,0,0,7.329,17H10a1,1,0,0,1,1,1v3.949A10.016,10.016,0,0,1,2.049,12.963ZM13,21.949V18a3,3,0,0,0-3-3H7.329a1,1,0,0,1-.708-.293L2.163,10.249A9.978,9.978,0,0,1,17.456,3.63l-.224.224A.507.507,0,0,1,16.879,4H15.5A2.5,2.5,0,0,0,13,6.5v1a.5.5,0,0,1-.5.5A2.5,2.5,0,0,0,10,10.5V11a3,3,0,0,0,3,3h3a1,1,0,0,1,1,1v.962a2.516,2.516,0,0,0,.732,1.767l1.337,1.337A9.971,9.971,0,0,1,13,21.949Z" />
                    </svg>

                </a>
                <a href="#responsive-header">

                    @if (Route::has('login'))
                        <div class="hidden block mt-4 lg:inline-block lg:mt-0 text-orange-200 hover:text-white mr-5">
                            @auth
                            <a href="{{ url('/home') }}"> Home</a> @else
                                <a href="{{ route('login') }}" class="mt-4 lg:mt-0 mr-5">Log in</a>

                    </a>
                </div>
                <div
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-orange-300 border-orange-300 hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 lg:mt-0">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Sign up</a>
                </div>
                @endif @endauth
            </div>

            </div>
        </nav>


        @endif
        <h1 class="text-6xl font-normal leading-normal mt-0 mb-2 text-pink-800">
            Trusted by
        </h1>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {

                var $window = $(window);

                function checkWindowWidth() {

                    var windowsize = $window.width();

                    if (windowsize > 1000) {

                        $('#navbar').css('display', 'block');

                    } else {

                        $('#navbar').css('display', 'none');

                    }
                }

                checkWindowWidth();

                $(window).resize(checkWindowWidth);

            });


            $('#navbar-btn').click(function() {
                $('#navbar').toggle();
            });
        </script>

        <!-- Meet the team -->
        <!-- component -->
        <!-- MDI Icons -->
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

        <!-- Page Container -->
        <div class="flex items-center justify-center min-h-screen bg-white py-48">
            <div class="flex flex-col">
                <!-- Notes -->


                <div class="flex flex-col mt-8">
                    <!-- Meet the Team -->
                    <div class="container max-w-7xl px-4">
                        <!-- Section Header -->
                        <div class="flex flex-wrap justify-center text-center mb-24">
                            <div class="w-full lg:w-6/12 px-4">
                                <!-- Header -->
                                <h1 class="text-gray-900 text-4xl font-bold mb-8">
                                    Meet the Team
                                </h1>

                                <!-- Description -->
                                <p class="text-gray-700 text-lg font-light">
                                    With over 100 years of combined experience, we've got a well-seasoned team at the helm.
                                </p>
                            </div>
                        </div>

                        <!-- Team Members -->
                        <div class="flex flex-wrap">
                            <!-- Member #1 -->
                            <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                                <div class="flex flex-col">
                                    <!-- Avatar -->
                                    <a href="#">
                                        <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                            src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80">
                                    </a>

                                    <!-- Details -->
                                    <div class="text-center mt-6">
                                        <!-- Name -->
                                        <h1 class="text-gray-900 text-xl font-bold mb-1">
                                            Tranter Jaskulski
                                        </h1>

                                        <!-- Title -->
                                        <div class="text-gray-700 font-light mb-2">
                                            Founder & Specialist
                                        </div>

                                        <!-- Social Icons -->
                                        <div
                                            class="flex items-center justify-center opacity-50 hover:opacity-100
                                    transition-opacity duration-300">
                                            <!-- Linkedin -->
                                            <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                                <i class="mdi mdi-linkedin text-indigo-500 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Twitter -->
                                            <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                                <i class="mdi mdi-twitter text-blue-300 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                                <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Member #2 -->
                            <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                                <div class="flex flex-col">
                                    <!-- Avatar -->
                                    <a href="#">
                                        <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                            src="https://images.unsplash.com/photo-1634896941598-b6b500a502a7?fit=clamp&w=400&h=400&q=80">
                                    </a>

                                    <!-- Details -->
                                    <div class="text-center mt-6">
                                        <!-- Name -->
                                        <h1 class="text-gray-900 text-xl font-bold mb-1">
                                            Denice Jagna
                                        </h1>

                                        <!-- Title -->
                                        <div class="text-gray-700 font-light mb-2">
                                            Tired & M. Specialist
                                        </div>

                                        <!-- Social Icons -->
                                        <div
                                            class="flex items-center justify-center opacity-50 hover:opacity-100
                                    transition-opacity duration-300">
                                            <!-- Linkedin -->
                                            <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                                <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Twitter -->
                                            <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                                <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                                <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Member #3 -->
                            <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                                <div class="flex flex-col">
                                    <!-- Avatar -->
                                    <a href="#">
                                        <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                            src="https://images.unsplash.com/photo-1634193295627-1cdddf751ebf?fit=clamp&w=400&h=400&q=80">
                                    </a>

                                    <!-- Details -->
                                    <div class="text-center mt-6">
                                        <!-- Name -->
                                        <h1 class="text-gray-900 text-xl font-bold mb-1">
                                            Kenji Milton
                                        </h1>

                                        <!-- Title -->
                                        <div class="text-gray-700 font-light mb-2">
                                            Team Memeber
                                        </div>

                                        <!-- Social Icons -->
                                        <div
                                            class="flex items-center justify-center opacity-50 hover:opacity-100
                                    transition-opacity duration-300">
                                            <!-- Linkedin -->
                                            <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                                <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Twitter -->
                                            <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                                <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                                <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Member #4 -->
                            <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                                <div class="flex flex-col">
                                    <!-- Avatar -->
                                    <a href="#">
                                        <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                            src="https://images.unsplash.com/photo-1635003913011-95971abba560?fit=clamp&w=400&h=400&q=80">
                                    </a>

                                    <!-- Details -->
                                    <div class="text-center mt-6">
                                        <!-- Name -->
                                        <h1 class="text-gray-900 text-xl font-bold mb-1">
                                            Doesn't matter
                                        </h1>

                                        <!-- Title -->
                                        <div class="text-gray-700 font-light mb-2">
                                            Will be fired
                                        </div>

                                        <!-- Social Icons -->
                                        <div
                                            class="flex items-center justify-center opacity-50 hover:opacity-100
                                    transition-opacity duration-300">
                                            <!-- Linkedin -->
                                            <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                                <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Twitter -->
                                            <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                                <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                                <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End meet the team -->
        <!-- component -->
        <!-- Code block starts -->
        <div class="pb-16" style="font-family: 'Lato', sans-serif">
            <dh-component>
                <div class="container mx-auto pt-16 bg-gray-100">
                    <div class="w-11/12 xl:w-2/3 lg:w-2/3 md:w-2/3 mx-auto sm:mb-10 mb-16">
                        <h1 tabindex="0"
                            class="focus:outline-none xl:text-5xl md:text-3xl text-xl text-center text-gray-800 font-extrabold mb-5 pt-4">
                            Partnerships with Coveted Brands</h1>
                        <p tabindex="0"
                            class="focus:outline-none text-base md:text-lg lg:text-xl text-center text-gray-600 font-normal xl:w-10/12 xl:mx-auto">
                            Our success has come from being committed to the property and investing in the development of
                            the product to maximize sales. At the same time and maintaining the integrity.</p>
                    </div>
                    <div class="xl:py-16 lg:py-16 md:py-16 sm:py-16 px-15 flex flex-wrap">
                        <div
                            class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r :border-r border-gray-200 xl:pb-10 pb-16 items-center">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/adidas-dark.png"
                                alt="Adidas" role="img" />
                        </div>
                        <div
                            class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r border-gray-200 xl:pb-10 pb-16 items-center">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/channel-dark.png"
                                alt="Chanel" role="img" />
                        </div>
                        <div
                            class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b border-gray-200 xl:pb-10 pb-16 pt-4 items-center">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/nike-dark.png"
                                alt="Nike" role="img" />
                        </div>
                        <div
                            class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center lg:border-b xl:border-b lg:border-l xl:border-l border-gray-200 xl:pb-10 pb-16 items-center">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/toyota-dark.png"
                                alt="Toyota" role="img" />
                        </div>
                        <div
                            class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/gs1-dark.png"
                                alt="GS1" role="img" />
                        </div>
                        <div
                            class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/berry-dark.png"
                                alt="BlackBerry" role="img" />
                        </div>
                        <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/min-dark.png"
                                alt="Mini" role="img" />
                        </div>
                        <div
                            class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-l lg:border-l border-gray-200 xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                            <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/honda-dark.png"
                                alt="Honda" role="img" />
                        </div>
                    </div>
                </div>
            </dh-component>
        </div>


        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap md:text-left text-center order-first">
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
                        <div
                            class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
                            <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                                <label for="footer-field" class="leading-7 text-sm text-gray-600">Placeholder</label>
                                <input type="text" id="footer-field" name="footer-field"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <button
                                class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                        </div>
                        <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
                            <br class="lg:block hidden">waistcoat green juice
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100">
                <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"
                            class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                        <span class="ml-3 text-xl">Tailblocks</span>
                    </a>
                    <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 Tailblocks —
                        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                            target="_blank">@knyttneve</a>
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                        <a class="text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </footer>

    </body>

    </html>
