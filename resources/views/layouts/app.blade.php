<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Burger Dungeon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>

<body class="font-['Poppins']">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-orange-900 shadow-sm">
            <div class="container">
                <a class="navbar-brand font-bold text-white text-4xl" href="{{ url('/') }}">
                    <span class="text-orange-500">bu</span>rger dungeon.
                </a>

                <div class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->




                </div>

            </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto px-10">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white text-2sm" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white text-2sm" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white text-2xl mr-4" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-front" aria-labelledby="navbarDropdown">
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

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer
        class="bg-orange-900
           text-3xl
           fixed
           inset-x-0
           bottom-0
           p-4">

        <div>
            <h1 class="font-bold text-white"><span class="text-orange-500">bu</span>rger dungeon.</h1>
        </div>
    </footer>
</body>


</html>
