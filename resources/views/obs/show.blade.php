<div class="card-body">
    <div style="overflow-x:auto;">
        <table> 
            <tr><th>Öğrenci&nbsp;&nbsp;&nbsp;</th>
                <th>Ders&nbsp;&nbsp;&nbsp;</th>
                <th>Vize&nbsp;&nbsp;&nbsp;</th>
                <th>Final&nbsp;&nbsp;&nbsp;</th>
                <th>Not&nbsp;&nbsp;&nbsp;</th>
                <th>Devamsızlık&nbsp;&nbsp;&nbsp;</th>
                <th>Durum&nbsp;&nbsp;&nbsp;</th>
            </tr>
            @foreach ($dersler as $ders)
            @foreach ($ogrenciler as $ogrenci)
            <tr>
                <td>{{ $ogrenci->ad }}</td>
                <td>{{ $ders->name }}</td>
                <td>{{ $vize= \App\Not::where('ogr_id', $ogrenci->id)->where('ders_id', $ders->id)->where('type','vize')->first()->not }}
                </td>
                <td>{{ $final= \App\Not::where('ogr_id', $ogrenci->id)->where('ders_id', $ders->id)->where('type','final')->first()->not }}
                </td>
                <td>{{ $ort= $vize*0.4 + $final*0.6 }}</td>
                <td>{{ $devam= \App\Devam::where('ogr_id', $ogrenci->id)->where('ders_id', $ders->id)->first()->devamsizlik }}
                    gün</td>
                <td> @if ( $ort < 100 && $ort>= 85 && $devam <= 20 ) <p>AA </p>
                            @elseif($ort < 85 && $ort>= 70 && $devam <= 20 ) <p>BB </p>
                                    @elseif ( $ort < 70 && $ort>= 55 && $devam <= 20 ) <p>CC </p>
                                            @elseif($ort < 55 && $ort>= 40 && $devam <= 20 ) <p>DD </p>
                                                    @elseif ( $ort < 40 && $devam <=20 ) <p>FF </p>
                                                        @else
                                                        <p>FG </p>
                                                        @endif</td>

            </tr>
            @endforeach
            @endforeach
        </table><br><br>
        {{ $ogrenciler->links() }}
    </div>
</div>