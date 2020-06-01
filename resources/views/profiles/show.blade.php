@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3><a href="{{ route('home') }}">Profil Sayfası</a></h3><br><br>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>
                <p>Tweetlerim</p>
            </h3><br><br>
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
                    <p class="content">{{ $post->content }}</p><br><br>
                    <h3>
                        <p>Yorumlar</p>
                    </h3><br><br>
                    @foreach ($post->comments as $comment)
                    <div class="row no-gutters">
                        <div class="col-1">
                            <img src="/avatar.png" alt="Avatar" class="avatar" width="100%">
                        </div>
                        <div class="col-11">
                            <div>
                                <span>{{ $comment->user->name }} @...
                                    {{ $comment->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                            </div>
                            <p class="content">{{ $comment->text }}</p><br><br>
                            <hr><br><br>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <hr><br>
    <div class="card">
        <div class="card-header">
            <h3>
                <p>Yorumlarım</p>
            </h3><br><br>
        </div>
        <div class="card-body">
            <p>Yorumlar</p>
            </h3><br><br>
            @foreach ($comments as $comment)
            <div class="row no-gutters">
                <div class="col-1">
                    <img src="/avatar.png" alt="Avatar" class="avatar" width="100%">
                </div>
                <div class="col-11">
                    <div>
                        <span>{{ $comment->user->name }} @...
                            {{ $comment->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                    </div>
                    <p class="content">{{ $comment->text }}</p><br><br>
                    <hr><br><br>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

