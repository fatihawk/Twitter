<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Not Sistemi</div><br><br>
                <h3>1.öğrenci için notları giriniz:</h3>
                <div class="card-body">
                    <form action="{{ route('ogretmen.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p>Matematik</p>
                        <input type="text" name="Matematik" >{{ empty($not->not) ? '': $not->not }}<br>
                        <p>Fizik</p>
                        <input type="text"name="Fizik">{{ empty($not->not) ? '': $not->not }}<br>
                        <p>Kimya</p>
                        <button name="not" type="submit" class="btn btn-primary">Gönder</button><br>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (isset($not))
    @foreach ($not as $nots)
    {{ $nots->not }}
    @endforeach
    @endif