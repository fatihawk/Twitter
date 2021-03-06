@if(!empty($searchResults))
<div class="card">
    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

    <div class="card-body">

        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            <h2>{{ ucfirst($type) }}</h2>

            @foreach($modelSearchResults as $searchResult)
                <ul>
                    <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                </ul>
            @endforeach
        @endforeach

    </div>
</div>
@endif


<div class="card-body">
    @foreach ($dersler as $derslers) {
    @foreach ($notlar as $notlars) {
    <table style="width:100%">
        <tr>
            <th>Ders</th>
            <th>Vize</th>
            <th>Final</th>
        </tr>
        <tr>
            <td>{{ $derslers->name }}</td>
        </tr>
    </table>
    }
    }
    @endforeach
    @endforeach
</div>
