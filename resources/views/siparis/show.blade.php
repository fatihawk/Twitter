
<br><br>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="card">
    <div class="card-header">
        <div class="navbar">
            <a href="{{ route('elektronik.form') }}" class="active">Elektronik</a>
            <a href="{{ route('mutfak.form') }}">Mutfak</a>
            <a href="{{ route('temizlik.form') }}">Temizlik</a>
            <a href="{{ route('kirtasiye.form') }}">Kırtasiye</a>
            <a href="{{ route('spor.form') }}">Spor</a>
            <a href="{{ route('telefon.form') }}">Telefon</a>
            <a href="{{ route('kitap.form') }}">Kitap</a>
            <a href="{{ route('giyim.form') }}">Giyim</a>
            <a href="{{ route('kozmetik.form') }}">Kozmetik</a>
            <a href="{{ route('muzik.form') }}">Müzik</a>
            <a href="{{ route('musteri.form') }}">Profil</a>
            @auth
            <a href="{{ route('urunlerim.form') }}">Ürünlerim</a>    
            @endauth
            @if (Auth::check() && Auth::user()->email == "admin@ondokuzon.com")
            <a href="{{ route('urun.form') }}">Ürün Girişi yap</a>
            @endif
        </div><br><br>
    </div>
    <div class="card-body">
        <div class="row no-gutters">
            <div class="col-6">
                <span>Müşteri Bilgileri</span><br>
                <hr>
                @foreach ($user as $users)
                <div>
                    <span> Ad ve Soyad : {{ $users->name }} </span><br><br>
                    <span> E-mail : {{ $users->email }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                @foreach ($adres as $adress)
                <div>
                    <span> Adres : {{ $adress->Adres }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
            </div>
            <div class="col-6">
                <span>Ürün Bilgileri</span><br>
                <hr>
                @foreach ($siparis as $sipariss)
                <div>
                    <span> Ürün : {{ $sipariss->order }} </span><br><br>
                    <span> Urun No : {{ $sipariss->urun_id }} </span><br><br>
                    <span> Marka No : {{ $sipariss->marka_id }} </span><br><br>
                    <span> Tutar : {{ $sipariss->price }} </span><br><br>
                    <form action="{{ route('odeme.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p>Lutfen Kart Bilgilerini giriniz: </p>
                        <textarea name="cardNo" id="" cols="1" rows="1" maxlength="240" class="form-control"
                            placeholder="İçerik" required>{{ $sipariss ->cardNo }}</textarea>
                        <button type="submit" onclick="alert('Ödeme Başarı ile gerçekleştirildi.')" class="btn btn-primary">Gönder</button>
                    </form>
                </div>
                @endforeach<br>
                <hr>
            </div>
        </div>
    </div>