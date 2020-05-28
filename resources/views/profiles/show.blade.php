@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3><a href="{{ route('home') }}">Profil Sayfası</a></h3><br><br>
    </div>
    <div class="card-body">
        @foreach ($posts as $post)
        <div class="row no-gutters">
            <div class="col-1">
                <img src="/avatar.png" alt="Avatar" class="avatar" width="100%">
            </div>
            <div class="col-11">
                <div>
                    <span>{{ $post->user->name }} @...
                        {{ $post->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                </div>
                <p class="content">{{ $post->content }}</p><br><br><hr><br><br>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection