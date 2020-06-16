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
            <tr>
                <td>Matematik</td>
                @foreach ($Matematik1 as $matematik1)
                <td>{{ $matematik1->not }}</td>
                @endforeach
                @foreach ($Matematik2 as $matematik2)
                <td>{{ $matematik2->not }}</td>
                @endforeach
                <td> {{ $ort1= $matematik1->not*0.4 + $matematik2->not*0.6 }}</td>
                <td> @if ( $ort1 > 60 )
                    <p>{{ $ort1 }} ile gectiniz </p>
                @else
                    <p>{{ $ort1 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Türkçe</td>
                @foreach ($Turkce1 as $turkce1)
                <td>{{ $turkce1->not }}</td>
                @endforeach
                @foreach ($Turkce2 as $turkce2)
                <td>{{ $turkce2->not }}</td>
                @endforeach
                <td>{{ $ort2= $turkce1->not*0.4 + $turkce2->not*0.6 }}</td>
                <td> @if ( $ort2 > 60 )
                    <p>{{ $ort2 }} ile gectiniz </p>
                @else
                    <p>{{ $ort2 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Fizik</td>
                @foreach ($Fizik1 as $fizik1)
                <td>{{ $fizik1->not }}</td>
                @endforeach
                @foreach ($Fizik2 as $fizik2)
                <td>{{ $fizik2->not }}</td>
                @endforeach
                <td>{{ $ort3=$fizik1->not*0.4 + $fizik2->not*0.6 }}</td>
                <td> @if ( $ort3 > 60 )
                    <p>{{ $ort3 }} ile gectiniz </p>
                @else
                    <p>{{ $ort3 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Beden</td>
                @foreach ($Beden1 as $beden1)
                <td>{{ $beden1->not }}</td>
                @endforeach
                @foreach ($Beden2 as $beden2)
                <td>{{ $beden2->not }}</td>
                @endforeach
                <td>{{ $ort4=$beden1->not*0.4 + $beden2->not*0.6 }}</td>
                <td> @if ( $ort4 > 60 )
                    <p>{{ $ort4 }} ile gectiniz </p>
                @else
                    <p>{{ $ort4 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Resim</td>
                @foreach ($Resim1 as $resim1)
                <td>{{ $resim1->not }}</td>
                @endforeach
                @foreach ($Resim2 as $resim2)
                <td>{{ $resim2->not }}</td>
                @endforeach
                <td>{{ $ort5=$resim1->not*0.4 + $resim2->not*0.6 }}</td>
                <td> @if ( $ort5 > 60 )
                    <p>{{ $ort5 }} ile gectiniz </p>
                @else
                    <p>{{ $ort5 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Coğrafya</td>
                @foreach ($Cografya1 as $cografya1)
                <td>{{ $cografya1->not }}</td>
                @endforeach
                @foreach ($Cografya2 as $cografya2)
                <td>{{ $cografya2->not }}</td>
                @endforeach
                <td>{{ $ort6=$cografya1->not*0.4 + $cografya2->not*0.6 }}</td>
                <td> @if ( $ort6 > 60 )
                    <p>{{ $ort6 }} ile gectiniz </p>
                @else
                    <p>{{ $ort6 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Geometri</td>
                @foreach ($Geometri1 as $geometri1)
                <td>{{ $geometri1->not }}</td>
                @endforeach
                @foreach ($Geometri2 as $geometri2)
                <td>{{ $geometri2->not }}</td>
                @endforeach
                <td>{{ $ort7=$geometri1->not*0.4 + $geometri2->not*0.6 }}</td>
                <td> @if ( $ort7 > 60 )
                    <p>{{ $ort7 }} ile gectiniz </p>
                @else
                    <p>{{ $ort7 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Tarih</td>
                @foreach ($Tarih1 as $tarih1)
                <td>{{ $tarih1->not }}</td>
                @endforeach
                @foreach ($Tarih2 as $tarih2)
                <td>{{ $tarih2->not }}</td>
                @endforeach
                <td>{{ $ort8=$tarih1->not*0.4 + $tarih2->not*0.6 }}</td>
                <td> @if ( $ort8 > 60 )
                    <p>{{ $ort8 }} ile gectiniz </p>
                @else
                    <p>{{ $ort8 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Sosyal</td>
                @foreach ($Sosyal1 as $sosyal1)
                <td>{{ $sosyal1->not }}</td>
                @endforeach
                @foreach ($Sosyal2 as $sosyal2)
                <td>{{ $sosyal2->not }}</td>
                @endforeach
                <td>{{ $ort9=$sosyal1->not*0.4 + $sosyal2->not*0.6 }}</td>
                <td> @if ( $ort9 > 60 )
                    <p>{{ $ort9 }} ile gectiniz </p>
                @else
                    <p>{{ $ort9 }} ile kaldiniz </p>
                @endif </td>
            </tr>
            <tr>
                <td>Fen</td>
                @foreach ($Fen1 as $fen1)
                <td>{{ $fen1->not }}</td>
                @endforeach
                @foreach ($Fen2 as $fen2)
                <td>{{ $fen2->not }}</td>
                @endforeach
                <td>{{ $ort10=$fen1->not*0.4 + $fen2->not*0.6 }}</td>
                <td> @if ( $ort10 > 60 )
                    <p>{{ $ort10 }} ile gectiniz </p>
                @else
                    <p>{{ $ort10 }} ile kaldiniz </p>
                @endif </td>
            </tr>
        </table>
    </div>
</div>