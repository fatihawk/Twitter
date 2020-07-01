<br><br>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="card">
    <div class="card-header">
        <div class="navbar">
            <a href="{{ route('elektronik.form') }}" class="active">Elektronik</a>
            <a href="{{ route('mutfak.form') }}" >Mutfak</a>
            <a href="{{ route('temizlik.form') }}">Temizlik</a>
            <a href="{{ route('kirtasiye.form') }}">Kırtasiye</a>
            <a href="{{ route('spor.form') }}">Spor</a>
            <a href="{{ route('telefon.form') }}">Telefon</a>
            <a href="{{ route('kitap.form') }}">Kitap</a>
            <a href="{{ route('giyim.form') }}">Giyim</a>
            <a href="{{ route('kozmetik.form') }}">Kozmetik</a>
            <a href="{{ route('muzik.form') }}">Müzik</a>
            <a href="{{ route('musteri.form') }}">Profil</a>
        </div><br><br>
    </div>
    <div class="card-body">
        <span>Kırtasiye</span><br>
        <hr>
        @foreach ($kirtasiye as $kirtasiyes)
        <div>
            <span> Ürün : {{ $kirtasiyes->name }} </span><br><br>
            <span> Fiyat : {{ $kirtasiyes->fiyat }} </span><br><br>
        </div>
        @endforeach<br>
    </div>