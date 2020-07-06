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
            <a href="{{ route('urun.form') }}">Ürün Girişi yap</a>
        </div><br><br>
    </div>
    <div class="card-body">
        <span>Ürün Girişi</span><br>
        <hr>
        <div>
            <form action="{{ route('urun.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(!empty($urun))
                <input type="hidden" name="id" value="{{ $urun->id}}">
                @endif
                <p>Urun adını giriniz:</p>
                <textarea name="name" id="" cols="3" rows="3" maxlength="240" class="form-control"
                    placeholder="İçerik">{{ empty($urun ->name) ? '': $urun->name }}</textarea>
                <p>Urun Grup No'sunu giriniz:</p>
                <textarea name="group_id" id="" cols="3" rows="3" maxlength="240" class="form-control"
                    placeholder="İçerik">{{ empty($urun ->group_id) ? '': $urun->group_id }}</textarea>
                <p>Marka No'sunu giriniz:</p>
                <textarea name="marka_id" id="" cols="3" rows="3" maxlength="240" class="form-control"
                    placeholder="İçerik">{{ empty($urun ->marka_id) ? '': $urun->marka_id }}</textarea>
                <p>Stok adedini giriniz:</p>
                <textarea name="stok" id="" cols="3" rows="3" maxlength="240" class="form-control"
                    placeholder="İçerik">{{ empty($urun ->stok) ? '': $urun->stok }}</textarea>
                <p>Birim fiyatını giriniz:</p>
                <textarea name="fiyat" id="" cols="3" rows="3" maxlength="240" class="form-control"
                    placeholder="İçerik">{{ empty($urun ->fiyat) ? '': $urun->fiyat }}</textarea>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
</div>