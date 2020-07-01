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
        </div><br><br>
    </div>
    <div class="card-body">
        <span>Elektronik</span><br>
        <hr>
        @foreach ($elektronik as $elektroniks)
        <div>
            <form action="{{ route('siparis.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <span name="order" id="">Ürün : {{ $elektroniks->name }} </span><br><br>
                <input type="hidden" name="order" value="{{ $elektroniks->name }}">
                <span name="urun_id" id=""> Ürün No : {{ $elektroniks->id }} </span><br><br>
                <input type="hidden" name="urun_id" value="{{ $elektroniks->id }}">
                <span name="marka_id" id=""> Marka No : {{ $elektroniks->marka_id }} </span><br><br>
                <input type="hidden" name="marka_id" value="{{ $elektroniks->marka_id }}">
                <span name="price" id=""> Fiyat : {{ $elektroniks->fiyat }} </span><br><br>
                <input type="hidden" name="price" value="{{ $elektroniks->fiyat }}">
                <button type="submit" class="btn btn-primary gonder">Satın al</button><br>
                <hr>
            </form>
        </div>
        @endforeach<br>
    </div>
</div>