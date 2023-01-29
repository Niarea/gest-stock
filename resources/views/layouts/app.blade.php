
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        {{-- Livewire --}}
        @livewireStyles

        <style>
            body{
                background-color: #FBFEFF;
            }
        </style>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="body-pd">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                   <!-- @auth
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
    </svg> {{ config('home.name', 'Tableau de bord') }}
                    </a>
                    @endauth-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                                </li>
                            @endif
                        @else


                                <h1 style="margin-right: 450px; color:red; font-weight: bold">Gest-Stock</h1>
                                <i style="color: blue; font-size: 13px; margin-top:30px">By Niaré Adama</i>
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle tex-lg" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            @auth


                    <header class="header" id="header">
                        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
                        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
                    </header>
                    <div class="l-navbar" id="nav-bar">
                        <nav class="nav">
                            <div> <a href="#" class="nav_logo"> <i class='bx bx-food-menu nav_logo-icon'></i> <span class="nav_logo-name">Menu</span> </a>
                                <div class="nav_list">
                                    <a href="{{ url('/home') }}" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                                    <a href="{{ route('clients.index') }}" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Clients</span> </a>
                                    <a href="{{ route('articles.index') }}" class="nav_link"> <i class='bx bx-sitemap nav_icon'></i> <span class="nav_name">Articles</span> </a>
                                    <a href="{{ route('commandes.index') }}" class="nav_link"> <i class='bx bxl-dropbox nav_icon'></i> <span class="nav_name">Commandes</span> </a>
                                    <a href="{{ route('fournisseurs.index') }}" class="nav_link"> <i class='bx bx-user-plus nav_icon'></i> <span class="nav_name">Fournisseurs</span> </a>
                                    <a href="{{ route('achats.index') }}" class="nav_link"> <i class='bx bx-purchase-tag-alt nav_icon'></i> <span class="nav_name">Achats</span> </a>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Déconnexion</span> </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </nav>
                    </div>

            @endauth
                <div class="container p-4 col-md-10 rounded">
                    @yield('content')


                </div>
        </div>
        {{-- Livewire scripts --}}
        @livewireScripts
    </body>
</html>
