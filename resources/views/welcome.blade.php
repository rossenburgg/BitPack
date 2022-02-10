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
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" />

    <script src="https://kit.fontawesome.com/e0bf0d9f03.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

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

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>





</head>

<body class="text-Gray-700 antialiased dark:bg-gray-900 dark:text-white">

    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="../index.html">BitPack</a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="{{ route('docs') }}"><i
                                class="lg:text-blueGray-200 text-blueGray-400 far fa-file-alt text-lg leading-lg mr-2"></i>
                            Docs</a>
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                    <li class="inline-block relative">
                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo" onclick="openDropdown(event,'demo-pages-dropdown')">
                             More
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="demo-pages-dropdown">
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                Admin Layout
                            </span>
                            <a href="./admin/dashboard.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Dashboard
                            </a>
                            <a href="./admin/settings.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Settings
                            </a>
                            <a href="./admin/tables.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Tables
                            </a>
                            <a href="./admin/maps.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Maps
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                Auth Layout
                            </span>
                            <a href="./auth/login.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Login
                            </a>
                            <a href="./auth/register.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Register
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                No Layout
                            </span>
                            <a href="./landing.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Landing
                            </a>
                            <a href="./profile.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Profile
                            </a>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <a
                            class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"><button
                                id="theme-toggle" type="button"
                                class="mr-2 lg:inline-block lg:mt-0 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5">
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <span class="lg:hidden inline-block ml-2">Mode</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                            target="_blank"><i
                                class="lg:text-blueGray-200 text-blueGray-400 fab fa-twitter text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Tweet</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://github.com/creativetimofficial/notus-js?ref=njs-landing" target="_blank"><i
                                class="lg:text-blueGray-200 text-blueGray-400 fab fa-github text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Star</span></a>
                    </li>

                    <li class="flex items-center">
                        <a href="#responsive-header">

                            @if (Route::has('login'))
                                <div
                                    class="text-white lg:text-blueGray-200 text-blueGray-400  text-lg leading-lg mr-2">
                                    @auth
                                    <a href="{{ url('/home') }}"> Home</a> @else
                                        <a href="{{ route('login') }}" class="mt-4 lg:mt-0 mr-5">Log in</a>

                            </a>
                </div>
                @endif @endauth
                </li>

                <li class="flex items-center">
                    <button
                        class="dark:bg-gray-900 bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 mr-3 mb-3 ease-linear transition-all duration-150"
                        type="button">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Sign up</a>
            </div>

            </button>
            </li>
            @endif
            </ul>

            </div>
        </nav>


        <main>
            <div
              class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75"
            >
              <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
                  background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
                "
              >
                <span
                  id="blackOverlay"
                  class="w-full h-full absolute opacity-75 bg-black"
                ></span>
              </div>
              <div class="container relative mx-auto py-20">
                <div class="items-center flex flex-wrap">
                  <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                      <h1 class="text-white font-semibold text-5xl ">
                       Your Number One Cryto Trading Platform
                      </h1>
                      <p class="text-white mt-4 text-lg text-blueGray-200">
                        Buy and sell crytocurrencies like bitcoin, litecoin, ethereum, etc. with your local payment methods like Mobile Money, Banks and credit cards easily.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)"
              >
                <svg
                  class="absolute bottom-0 overflow-hidden"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="none"
                  version="1.1"
                  viewBox="0 0 2560 100"
                  x="0"
                  y="0"
                >
                  <polygon
                    class="text-blueGray-200 fill-current"
                    points="2560 0 2560 100 0 100"
                  ></polygon>
                </svg>
              </div>
            </div>
            <section class="pb-20 bg-blueGray-200 -mt-24 dark:bg-gray-900">
              <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                  <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center ">
                    <div
                      class="dark:bg-gray-700 relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                      <div class="px-4 py-5 flex-auto ">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                        >
                          <i class="fas fa-award"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Awarded Agency</h6>
                        <p class="mt-2 mb-4 text-blueGray-500">
                          Divide details about your product or agency work into parts.
                          A paragraph describing a feature will be enough.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-4/12 px-4 text-center">
                    <div
                      class="dark:bg-gray-600 relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                      <div class="px-4 py-5 flex-auto ">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-Blue-500"
                        >
                          <i class="fas fa-retweet"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Free Revisions</h6>
                        <p class="mt-2 mb-4 text-blueGray-500">
                          Keep you user engaged by providing meaningful information.
                          Remember that by this time, the user is curious.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div
                      class="dark:bg-gray-700 relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                      <div class="px-4 py-5 flex-auto">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400"
                        >
                          <i class="fas fa-fingerprint"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Verified Company</h6>
                        <p class="mt-2 mb-4 text-blueGray-500">
                          Write a few lines about each one. A paragraph describing a
                          feature will be enough. Keep you user engaged!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                  <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                      class="dark:bg-gray-700 text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white"
                    >
                      <i class="fas fa-user-friends text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                      Working with us is a pleasure
                    </h3>
                    <p
                      class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600"
                    >
                      Don't let your uses guess by attaching tooltips and popoves to
                      any element. Just make sure you enable them first via
                      JavaScript.
                    </p>
                    <p
                      class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600"
                    >
                      The kit comes with three pre-built pages to help you get started
                      faster. You can change the text and images and you're good to
                      go. Just make sure you enable them first via JavaScript.
                    </p>
                    <a href="../index.html" class="font-bold text-blueGray-700 mt-8"
                      >Check Notus JS!</a
                    >
                  </div>
                  <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                      class="dark:bg-gray-700 relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500"
                    >
                      <img
                        alt="..."
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                        class="w-full align-middle rounded-t-lg"
                      />
                      <blockquote class="relative p-8 mb-4">
                        <svg
                          preserveAspectRatio="none"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 583 95"
                          class="absolute left-0 w-full block h-95-px -top-94-px"
                        >
                          <polygon
                            points="-30,95 583,95 583,65"
                            class=" text-pink-500 fill-current"
                          ></polygon>
                        </svg>
                        <h4 class="text-xl font-bold text-white">
                          Top Notch Services
                        </h4>
                        <p class=" text-md font-light mt-2 text-white">
                          The Arctic Ocean freezes every winter and much of the
                          sea-ice then thaws every summer, and that process will
                          continue whatever happens.
                        </p>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="dark:bg-gray-800 relative py-20">
              <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
                style="transform: translateZ(0px)"
              >
                <svg
                  class="absolute bottom-0 overflow-hidden"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="none"
                  version="1.1"
                  viewBox="0 0 2560 100"
                  x="0"
                  y="0"
                >
                  <polygon
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"
                  ></polygon>
                </svg>
              </div>
              <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                  <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img
                      alt="..."
                      class="max-w-full rounded-lg shadow-lg"
                      src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                    />
                  </div>
                  <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                      <div
                        class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                      >
                        <i class="fas fa-rocket text-xl"></i>
                      </div>
                      <h3 class="text-3xl font-semibold">A growing company</h3>
                      <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                        The extension comes with three pre-built pages to help you get
                        started faster. You can change the text and images and you're
                        good to go.
                      </p>
                      <ul class="list-none mt-6">
                        <li class="py-2">
                          <div class="flex items-center">
                            <div>
                              <span
                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                ><i class="fas fa-fingerprint"></i
                              ></span>
                            </div>
                            <div>
                              <h4 class="text-blueGray-500">
                                Carefully crafted components
                              </h4>
                            </div>
                          </div>
                        </li>
                        <li class="py-2">
                          <div class="flex items-center">
                            <div>
                              <span
                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                ><i class="fab fa-html5"></i
                              ></span>
                            </div>
                            <div>
                              <h4 class="text-blueGray-500">Amazing page examples</h4>
                            </div>
                          </div>
                        </li>
                        <li class="py-2">
                          <div class="flex items-center">
                            <div>
                              <span
                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                                ><i class="far fa-paper-plane"></i
                              ></span>
                            </div>
                            <div>
                              <h4 class="text-blueGray-500">Dynamic components</h4>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="pt-20 pb-48">
              <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                  <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                    <p class="text-lg leading-relaxed m-4 text-blueGray-500">
                      According to the National Oceanic and Atmospheric
                      Administration, Ted, Scambos, NSIDClead scentist, puts the
                      potentially record maximum.
                    </p>
                  </div>
                </div>
                <div class="flex flex-wrap">
                  <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                      <img
                        alt="..."
                        src="../assets/img/team-1-800x800.jpg"
                        class="shadow-lg rounded-full mx-auto max-w-120-px"
                      />
                      <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Ryan Tompson</h5>
                        <p
                          class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                        >
                          Web Developer
                        </p>
                        <div class="mt-6">
                          <button
                            class=" bg-lightBlue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-twitter"></i></button
                          ><button
                            class="bg-lightBlue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-facebook-f"></i></button
                          ><button
                            class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-dribbble"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                      <img
                        alt="..."
                        src="../assets/img/team-2-800x800.jpg"
                        class="shadow-lg rounded-full mx-auto max-w-120-px"
                      />
                      <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Romina Hadid</h5>
                        <p
                          class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                        >
                          Marketing Specialist
                        </p>
                        <div class="mt-6">
                          <button
                            class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-google"></i></button
                          ><button
                            class="bg-lightBlue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                      <img
                        alt="..."
                        src="../assets/img/team-3-800x800.jpg"
                        class="shadow-lg rounded-full mx-auto max-w-120-px"
                      />
                      <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Alexa Smith</h5>
                        <p
                          class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                        >
                          UI/UX Designer
                        </p>
                        <div class="mt-6">
                          <button
                            class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-google"></i></button
                          ><button
                            class="bg-lightBlue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-twitter"></i></button
                          ><button
                            class="bg-blueGray-700 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-instagram"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                      <img
                        alt="..."
                        src="../assets/img/team-4-470x470.png"
                        class="shadow-lg rounded-full mx-auto max-w-120-px"
                      />
                      <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Jenna Kardi</h5>
                        <p
                          class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                        >
                          Founder and CEO
                        </p>
                        <div class="mt-6">
                          <button
                            class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-dribbble"></i></button
                          ><button
                            class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-google"></i></button
                          ><button
                            class="bg-lightBlue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-twitter"></i></button
                          ><button
                            class="bg-blueGray-700 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button"
                          >
                            <i class="fab fa-instagram"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="pb-20 relative block bg-blueGray-800">
              <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
                style="transform: translateZ(0px)"
              >
                <svg
                  class="absolute bottom-0 overflow-hidden"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="none"
                  version="1.1"
                  viewBox="0 0 2560 100"
                  x="0"
                  y="0"
                >
                  <polygon
                    class="text-blueGray-800 fill-current"
                    points="2560 0 2560 100 0 100"
                  ></polygon>
                </svg>
              </div>
              <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                  <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Build something</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-blueGray-400">
                      Put the potentially record low maximum sea ice extent tihs year
                      down to low ice. According to the National Oceanic and
                      Atmospheric Administration, Ted, Scambos.
                    </p>
                  </div>
                </div>
                <div class="flex flex-wrap mt-12 justify-center">
                  <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                      class="dark:bg-gray-700 text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                      <i class="fas fa-medal text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                      Excelent Services
                    </h6>
                    <p class="mt-2 mb-4 text-blueGray-400">
                      Some quick example text to build on the card title and make up
                      the bulk of the card's content.
                    </p>
                  </div>
                  <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                      class="dark:bg-gray-700 text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                      <i class="fas fa-poll text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                      Grow your market
                    </h5>
                    <p class="mt-2 mb-4 text-blueGray-400">
                      Some quick example text to build on the card title and make up
                      the bulk of the card's content.
                    </p>
                  </div>
                  <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                      class="dark:bg-gray-700 text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                      <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                    <p class="mt-2 mb-4 text-blueGray-400">
                      Some quick example text to build on the card title and make up
                      the bulk of the card's content.
                    </p>
                  </div>
                </div>
              </div>
            </section>
            <section class="relative block py-24 lg:pt-0 bg-blueGray-800">
              <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                  <div class="w-full lg:w-6/12 px-4">
                    <div
                      class="dark:bg-gray-700 relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200"
                    >
                      <div class="flex-auto p-5 lg:p-10">
                        <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                        <p class="leading-relaxed mt-1 mb-4 text-blueGray-500">
                          Complete this form and we will get back to you in 24 hours.
                        </p>
                        <div class="relative w-full mb-3 mt-8">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            for="full-name"
                            >Full Name</label
                          ><input
                            type="text"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            placeholder="Full Name"
                          />
                        </div>
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            for="email"
                            >Email</label
                          ><input
                            type="email"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            placeholder="Email"
                          />
                        </div>
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            for="message"
                            >Message</label
                          ><textarea
                            rows="4"
                            cols="80"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                            placeholder="Type a message..."
                          ></textarea>
                        </div>
                        <div class="text-center mt-6 ">
                          <button
                            class=" text-gray-800 dark:bg-gray-900 dark:text-gray-700 bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button"
                          >
                            Send Message
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
          <footer class="relative bg-blueGray-200 pt-8 pb-6">
            <div
              class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
              style="transform: translateZ(0px)"
            >
              <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
              >
                <polygon
                  class=" text-blueGray-200 fill-current"
                  points="2560 0 2560 100 0 100"
                ></polygon>
              </svg>
            </div>
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap text-center lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                  <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                  <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                    Find us on any of these platforms, we respond 1-2 business days.
                  </h5>
                  <div class="mt-6 lg:mb-0 mb-6">
                    <button
                      class="dark:bg-gray-700 bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="dark:bg-gray-700 bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button"
                    >
                      <i class="fab fa-facebook-square"></i></button
                    ><button
                      class="dark:bg-gray-700 bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i></button
                    ><button
                      class="dark:bg-gray-700 bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                      type="button"
                    >
                      <i class="fab fa-github"></i>
                    </button>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                  <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                      <span
                        class="block uppercase text-blueGray-500 text-sm font-semibold mb-2"
                        >Useful Links</span
                      >
                      <ul class="list-unstyled">
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >About Us</a
                          >
                        </li>
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >Blog</a
                          >
                        </li>
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >Github</a
                          >
                        </li>
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >Free Products</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <span
                        class="block uppercase text-blueGray-500 text-sm font-semibold mb-2"
                        >Other Resources</span
                      >
                      <ul class="list-unstyled">
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >MIT License</a
                          >
                        </li>
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >Terms &amp; Conditions</a
                          >
                        </li>
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >Privacy Policy</a
                          >
                        </li>
                        <li>
                          <a
                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                            href="#"
                            >Contact Us</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-6 border-blueGray-300" />
              <div
                class="flex flex-wrap items-center md:justify-between justify-center"
              >
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                  <div class="text-sm text-blueGray-500 font-semibold py-1">
                    Copyright © <span id="get-current-year"></span> BitPack by
                    <a
                      href="#"
                      class="text-blueGray-500 hover:text-blueGray-800"
                      >ALARIC</a
                    >.
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </body>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
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
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });


        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "b0d0d85c-e1e8-4303-bf5c-c001aaa209d5";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();


        /* Make dynamic date appear */
    (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById(
            "get-current-year"
          ).innerHTML = new Date().getFullYear();
        }
      })();
      /* Function for opning navbar on mobile */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }

    </script>


    </html>
