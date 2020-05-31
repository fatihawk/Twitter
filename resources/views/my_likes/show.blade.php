@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3><p>Beğendiğim twitler</p></h3><br><br>
    </div>
    <div class="card-body">
        @foreach ($posts as $likes)
        <div class="row no-gutters">
            <div class="col-1">
                <img src="/avatar.png" alt="Avatar" class="avatar" width="100%">
            </div>
            <div class="col-11">
                <div>
                    <span>{{ $likes->user->name }} @...
                        {{ $likes->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                </div>
                <p class="content">{{ $likes->content }}</p><br><br><hr><br><br>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection