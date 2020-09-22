<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        {{--
        <title>{{ config("app.name", "Laravel") }}</title>
        --}} @isset($title)
        {{
            $title
        }}
        @endisset

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" />
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div id="app">
            <div class="scroll-line">
                <div class="line"></div>
                <div class="point"></div>
            </div>
            <div class="arrow-back-top">
                <i class="fas fa-arrow-up"></i>
            </div>
            <nav class="nav-wrap">
                <div class="drop-toggle-ham">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <div class="container">
                    <div class="btn-home">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img
                                src="{{ asset('img/icons/home-icon.png') }}"
                                alt=""
                            />
                        </a>
                    </div>

                    <div class="m-nav-container-screen m-nav-container-mobile">
                        <!-- Left Side Of Navbar -->
                        <ul class="main-m nav-items">
                            <li class="nav-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/#about-me') }}">About me</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/#contact') }}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/#blog') }}">Blog</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="log-m nav-items">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('login') }}"
                                    >{{ __("Login") }}</a
                                >
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('register') }}"
                                    >{{ __("Register") }}</a
                                >
                            </li>
                            @endif @else
                            <li class="nav-item dropdown">
                                <a
                                    id="navbarDropdown"
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    v-pre
                                >
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbarDropdown"
                                >
                                    <a
                                        class="nav-link"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    >
                                        {{ __("Logout") }}
                                    </a>

                                    <form
                                        id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        style="display: none;"
                                    >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
            @include('layouts.footer')
        </div>
        <script src="js/menuHamburger.js"></script>
        <script src="js/scrollEffects.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"
            integrity="sha256-kRbW+SRRXPogeps8ZQcw2PooWEDPIjVQmN1ocWVQHRY="
            crossorigin="anonymous"
        ></script>
            <script src="js/anim.js"></script> 
    </body>
</html>
