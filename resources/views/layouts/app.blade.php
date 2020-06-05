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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="app">

        <main class="container">
            <div class="row">
                <div class="col-3">
                    <div class="sticky-top">
                        <div class="sidebar">
                            <button class="btn">
                                <h2><i class="fa fa-twitter"></i></h2>
                            </button>
                            <a href="{{ route('home') }}">
                                <h3><i class="fa fa-fw fa-home"></i>Anasayfa</h3>
                            </a><br>
                            <a href="#Keşfet">
                                <h3><i class="fa fa-fw fa-hashtag"></i> Keşfet</h3>
                            </a><br>
                            <a href="#Bildirimler">
                                <h3><i class="fa fa-fw fa-bell"></i> Bidirimler</h3>
                            </a><br>
                            <a href="#Mesajlar">
                                <h3><i class="fa fa-fw fa-envelope"></i> Mesajlar</h3>
                            </a><br>
                            <a href="#Yer işaretleri">
                                <h3><i class="fa fa-fw fa-bookmark"></i> Yer işaretleri</h3>
                            </a><br>
                            <a href="{{ route('my_likes.show') }}">
                                <h3><i class="fa fa-fw fa-list-alt"></i> Beğendiğim twittler</h3>
                            </a><br>
                            @auth
                            <a href="{{ route('profiles.show',[auth()->user()->name]) }}">
                                <h3><i class="fa fa-fw fa-user"></i> Profil</h3>
                            </a><br>
                            @endauth
                            <a href="#Daha fazla">
                                <h3><i class="fa fa-fw fa-ellipsis-h"></i> Daha fazla</h3>
                            </a><br>
                            <button class="btn btn-primary tweetle">
                                <h3>Tweetle</h3>
                            </button><br><br>
                            @auth
                                <button type="button"
                                    class="btn btn-primary dropdown-toggle dropdown dropleft float-right"
                                    data-toggle="dropdown"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('login') }}"> Var olan kişi ekle</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="
                                event.preventDefault(); 
                                document.getElementById('logout-form').submit();">
                                        {{ auth()->user()->name }} hesabından çıkış yap
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                <img src="{{ asset(auth()->user()->avatar) }}" width="40%" alt="" style="border-radius: 50%">
                                <span><a
                                        href="{{ route('profiles.show',[auth()->user()->name]) }}">{{ auth()->user()->name }}</a></span>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}">
                                <h3>Login</h3>
                            </a>
                            <a href="{{ route('register') }}">
                                <h3>Register</h3>
                            </a>
                            @endguest
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    @yield('content')
                </div>
                <div class="col-3 ">
                    <div class="sticky-top">
                        <div class="search-container">
                            <form action="/action_page.php">
                                <button class="search" type="submit"><i class="fa fa-search"></i></button>
                                <input class="ara" type="text" placeholder="Search.." name="search">
                            </form>
                        </div>
                        <div class="Tags">
                            <a href="#"><b>İlgini çekebilecek gündemler</b></a><br>
                            <hr>
                            <a class="türkiye-gündemi" href="#">Türkiye tarihinde gündemde</a><br>
                            <a class="gündem-ogeleri" href="#">
                                <h5>#yasindusmaniacunmedya</h5>
                            </a>
                            <a class="twit-sayisi" href="#"> 12,3 B Tweet</a><br>
                            <hr>
                            <a class="türkiye-gündemi" href="#">Türkiye tarihinde gündemde</a><br>
                            <a class="gündem-ogeleri" href="#">
                                <h5>Bahçeli</h5>
                            </a>
                            <a class="twit-sayisi" href="#">9.048 Tweet</a><br>
                            <hr>
                            <a class="türkiye-gündemi" href="#">Türkiye tarihinde gündemde</a><br>
                            <a class="gündem-ogeleri" href="#">
                                <h5>CNNTürk</h5>
                            </a>
                            <a class="twit-sayisi" href="#">94,5 B Tweet</a><br>
                            <hr>
                            <a class="türkiye-gündemi" href="#">Türkiye tarihinde gündemde</a><br>
                            <a class="gündem-ogeleri" href="#">
                                <h5>Kanal 7</h5>
                            </a>
                            <a class="twit-sayisi" href="#">4.834 Tweet</a><br>
                            <hr>
                        </div>
                        <br>
                        <div class="kimi_takip_etmeli">
                            <b>Kimi takip etmeli</b><br>
                            <hr>
                            @auth
                            @foreach ($random_user as $random)
                            <div class="row no-gutters">
                                <div class="col-2">
                                    <img src="{{ asset($random->avatar) }}" width="100%" alt="" style="border-radius: 50%">
                                </div>
                                <div class="col-10">
                                    <span><a href="{{ route('profiles.show',[$random]) }}">{{ $random->name }}</a></span>
                                </div>
                            </div><br>
                            @endforeach
                            @endauth
                            <hr>
                            <a href="#" >Daha fazla kişi göster</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>