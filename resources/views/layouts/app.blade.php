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
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container">
            <div class="row">
                <div class="col-3">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <div class="sidebar">
                        <button class="btn"><i class="fa fa-twitter"></i></button><br><br>
                        <a href="#Anasayfa"><i class="fa fa-fw fa-home"></i> Anasayfa</a><br><br>
                        <a href="#Keşfet"><i class="fa fa-fw fa-hashtag"></i> Keşfet</a><br><br>
                        <a href="#Bildirimler"><i class="fa fa-fw fa-bell"></i> Bidirimler</a><br><br>
                        <a href="#Mesajlar"><i class="fa fa-fw fa-envelope"></i> Mesajlar</a><br><br>
                        <a href="#Yer işaretleri"><i class="fa fa-fw fa-bookmark"></i> Yer işaretleri</a><br><br>
                        <a href="#Listeler"><i class="fa fa-fw fa-list-alt"></i> Listeler</a><br><br>
                        <a href="#Profil"><i class="fa fa-fw fa-user"></i> Profil</a><br><br>
                        <a href="#Daha fazla"><i class="fa fa-fw fa-ellipsis-h"></i> Daha fazla</a><br><br>
                        <button class="button">tweetle</button>
                        <!-- .button {
                        background-color: #ddd;
                        border: none;
                        color: black;
                        padding: 10px 20px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        margin: 4px 2px;
                        cursor: pointer;
                        border-radius: 16px;
                        }  -->
                    </div> 
                </div>
                <div class="col-6">
                    @yield('content')
                </div>
                <div class="col-3">
                    <div class="search-container">
                        <form action="/action_page.php">
                          <input type="text" placeholder="Search.." name="search">
                          <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>    
                   <a href="#"><b>İlgini çekebilecek gündemler</b></a><br><hr>
                   <a href="#">Türkiye tarihinde gündemde</a><br>
                   <a href="#"> #yasindusmaniacunmedya</a><br>
                   <a href="#"> 12,3 B Tweet</a><br><hr>
                   <a href="#">Türkiye tarihinde gündemde</a><br>
                   <a href="#">Bahçeli</a><br>
                   <a href="#">9.048 Tweet</a><br><hr>
                   <a href="#">Türkiye tarihinde gündemde</a><br>
                   <a href="#">Sevda Noyan</a><br>
                   <a href="#">94,5 B Tweet</a><br><hr>
                   <a href="#">Türkiye tarihinde gündemde</a><br>
                   <a href="#">Kanal 7</a><br>
                   <a href="#">4.834 Tweet</a><br><hr>
                </div>
            </div>

            
            
        </main>
    </div>
</body>

</html>