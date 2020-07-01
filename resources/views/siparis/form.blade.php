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
        <div class="row no-gutters">
            <div class="col-4">
                <span>Elektronik</span><br>
                <hr>
                @foreach ($UrunGrup1 as $Group1)
                <div>
                    <span> Ürün : {{ $Group1->name }} </span><br><br>
                    <span> Fiyat : {{ $Group1->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                <span>Kırtasiye</span><br>
                <hr>
                @foreach ($UrunGrup4 as $Group4)
                <div>
                    <span> Ürün : {{ $Group4->name }} </span><br><br>
                    <span> Fiyat : {{ $Group4->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                <span>Kitap</span><br>
                <hr>
                @foreach ($UrunGrup7 as $Group7)
                <div>
                    <span> Ürün : {{ $Group7->name }} </span><br><br>
                    <span> Fiyat : {{ $Group7->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                <span>Müzik</span><br>
                <hr>
                @foreach ($UrunGrup10 as $Group10)
                <div>
                    <span> Ürün : {{ $Group10->name }} </span><br><br>
                    <span> Fiyat : {{ $Group10->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
            </div>
            <div class="col-4">
                <span>Mutfak</span><br>
                <hr>
                @foreach ($UrunGrup2 as $Group2)
                <div>
                    <span> Ürün : {{ $Group2->name }} </span><br><br>
                    <span> Fiyat : {{ $Group2->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                <span>Spor</span><br>
                <hr>
                @foreach ($UrunGrup5 as $Group5)
                <div>
                    <span> Ürün : {{ $Group5->name }} </span><br><br>
                    <span> Fiyat : {{ $Group5->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                <span>Giyim</span><br>
                <hr>
                @foreach ($UrunGrup8 as $Group8)
                <div>
                    <span> Ürün : {{ $Group8->name }} </span><br><br>
                    <span> Fiyat : {{ $Group8->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
            </div>
            <div class="col-4">
                <span>Temizlik</span><br>
                <hr>
                @foreach ($UrunGrup3 as $Group3)
                <div>
                    <span> Ürün : {{ $Group3->name }} </span><br><br>
                    <span> Fiyat : {{ $Group3->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                <span>Telefon</span><br>
                <hr>
                @foreach ($UrunGrup6 as $Group6)
                <div>
                    <span> Ürün : {{ $Group6->name }} </span><br><br>
                    <span> Fiyat : {{ $Group6->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
                <span>Kozmetik</span><br>
                <hr>
                @foreach ($UrunGrup9 as $Group9)
                <div>
                    <span> Ürün : {{ $Group9->name }} </span><br><br>
                    <span> Fiyat : {{ $Group9->fiyat }} </span><br><br>
                </div>
                @endforeach<br>
                <hr>
            </div>
        </div>
    </div>