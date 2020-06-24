<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Not Sistemi</div>

                <div class="card-body">
                    <form action="{{ route('ogretmen.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p>Ders Notu Giriniz:</p>
                        <textarea name="not" id="" cols="3" rows="3" maxlength="240" class="form-control"
                            placeholder="İçerik">{{ empty($not->not) ? '': $not->not }}</textarea>
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (isset($not))
        @foreach ($not as $nots)
        <p>{{ $nots->not }}</p><br><br>
        <hr><br><br>
        @endforeach
        @endif
    </div>