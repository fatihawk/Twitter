<div class="card">
    <div class="card-header">
        <h3>
            <p>{{ $ogrenciler->ad }}</p>
        </h3><br><br>
    </div>
</div>
<div class="card-body">
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Ders</th>
                <th>Vize</th>
                <th>Final</th>
                <th>Not</th>
                <th>Durum</th>
            </tr>
            @foreach ($dersler as $ders)
                <tr>
                    <td>{{ $ders->name }}</td>
                    <td>{{ $vize= \App\Not::where('ogr_id', $ogrenciler->id)->where('ders_id', $ders->id)->where('type','vize')->first()->not }}</td>
                    <td>{{ $final= \App\Not::where('ogr_id', $ogrenciler->id)->where('ders_id', $ders->id)->where('type','final')->first()->not }}</td>
                    <td>{{ $ort= $vize*0.4 + $final*0.6 }}</td>
                    <td> @if ( $ort > 60 )
                        <p>{{ $ort }} ile gectiniz </p>
                    @else
                        <p>{{ $ort }} ile kaldiniz </p>
                    @endif </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>