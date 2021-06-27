<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        .search-icon {
            background: url("images/loupe.svg") ;
        }
        .search-icon:hover {
            background: url("images/search.svg") ;
        }


        body{
            background-color: #d9d9d9;
        }

        .background-color{
            background-color: #d9d9d9;
        }

        .custom-button-hover:hover{
            background-color: #d9d9d9;
        }

    </style>


</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PC
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Budget</a>
                            <a class="dropdown-item" href="#">All-in-One</a>
                            <a class="dropdown-item" href="#">Office</a>
                            <a class="dropdown-item" href="#">Gaming</a>
                            <a class="dropdown-item" href="#">Creators</a>
                            <a class="dropdown-item" href="#">iMac</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Laptop
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Budget</a>
                            <a class="dropdown-item" href="#">Gaming</a>
                            <a class="dropdown-item" href="#">2 in 1</a>
                            <a class="dropdown-item" href="#">Chromebook</a>
                            <a class="dropdown-item" href="#">MacBook</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Storage Devices
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">External Hard Drive</a>
                            <a class="dropdown-item" href="#">Internal Hard Drive</a>
                            <a class="dropdown-item" href="#">SD Cards</a>
                            <a class="dropdown-item" href="#">SSD</a>
                            <a class="dropdown-item" href="#">USB Sticks</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CPU
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ryzen</a>
                            <a class="dropdown-item" href="#">Intel</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Components
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Monitors</a>
                            <a class="dropdown-item" href="#">Graphics Card</a>
                            <a class="dropdown-item" href="#">Sound Card</a>
                            <a class="dropdown-item" href="#">Motherboard</a>
                            <a class="dropdown-item" href="#">Fans</a>
                            <a class="dropdown-item" href="#">Cables</a>
                            <a class="dropdown-item" href="#">Power Supply</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accessories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Keyboard</a>
                            <a class="dropdown-item" href="#">Mouse</a>
                            <a class="dropdown-item" href="#">Mouse pad</a>
                            <a class="dropdown-item" href="#">Zip Ties</a>
                            <a class="dropdown-item" href="#">RGB</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Speakers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Compact</a>
                            <a class="dropdown-item" href="#">Smart Speakers</a>
                            <a class="dropdown-item" href="#">Sound Bars</a>
                            <a class="dropdown-item" href="#">Home Theatre</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Printers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Laser</a>
                            <a class="dropdown-item" href="#">Inkjet</a>
                            <a class="dropdown-item" href="#">Office</a>
                        </div>
                    </li>

                </ul>


                <form class="form-inline">
                    <input class="form-control mr-sm-2 background-color" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0 custom-button-hover" type="submit">
                        <img class="search-icon" src="images/loupe.svg" alt="search" width="25px" height="25px">
                    </button>
                </form>



              <!-- Right Side Of Navbar -->

              <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">My Cart</a>
                </li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name . " " . Auth::user()->last_name  }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

            </div>
          </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
