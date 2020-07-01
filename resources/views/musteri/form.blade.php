<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="card">
    <div class="card-header">
        <div class="navbar">
            <a href="{{ route('elektronik.form') }}" class="active">Elektronik</a>
            <a href="{{ route('mutfak.form') }}"><i class="fa fa-cutlery" aria-hidden="true"></i>Mutfak</a>
            <a href="{{ route('temizlik.form') }}">Temizlik</a>
            <a href="{{ route('kirtasiye.form') }}">Kırtasiye</a>
            <a href="{{ route('spor.form') }}">Spor</a>
            <a href="{{ route('telefon.form') }}">Telefon</a>
            <a href="{{ route('kitap.form') }}">Kitap</a>
            <a href="{{ route('giyim.form') }}">Giyim</a>
            <a href="{{ route('kozmetik.form') }}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Kozmetik</a>
            <a href="{{ route('muzik.form') }}"><i class="fa fa-music" aria-hidden="true"></i>Müzik</a>
            <a href="{{ route('musteri.form') }}"><i class="fa fa-user" aria-hidden="true"></i>Profil</a>
        </div><br><br>
    </div>
    <div class="card-body">
        <h2>Müşteri Bilgileri</h2>
        @foreach ($musteri as $user)
        <div>
            <span> Ad ve Soyad : {{ $user->name }} </span><br><br>
            <span> E-mail : {{ $user->email }} </span><br><br>
        </div>
        @endforeach
        <form action="{{ route('musteri.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p>Lütfen adresinizi giriniz:</p>
            <textarea name="Adres" id="" cols="10" rows="1" maxlength="240" class="form-control" placeholder="İçerik"
                required>{{ empty($adres ->Adres) ? '': $adres->Adres }}</textarea>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form><br><br>
        <hr>
        @foreach ($adres as $adress)
        <div>
            <span>Adres Bilgileri </span><br><br>
            <span> Adres : {{ $adress->Adres }} </span><br><br>
        </div>
        @endforeach
    </div>