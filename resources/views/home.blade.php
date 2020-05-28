@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h3><a href="{{ route('home') }}">Anasayfa</a></h3>
    </div>
    <div class="card-body">
        <form action="{{ route('post.save') }}" method="POST">
            @csrf
            @if(!empty($post))
            <input type="hidden" name="id" value="{{ $post -> id}}">
            @endif
            <textarea name="content" id="" cols="3" rows="3" maxlength="140" class="form-control"
                placeholder="İçerik">{{ empty($post ->content) ? '': $post->content }}</textarea>
            <button type="submit" class="btn btn-primary gonder">Tweetle</button>
    </div>
    <div class="card-body">
        @foreach ($posts as $post)
        <div class="row no-gutters">
            <div class="col-1">
                <img src="avatar.png" alt="Avatar" class="avatar" width="100%">
            </div>
            <div class="col-11">
                <button type="button" class="btn btn-primary dropdown-toggle dropdown dropleft float-right"
                    data-toggle="dropdown"></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">İlgimi çekmiyor</a>
                    <a class="dropdown-item" href="#">Twiti katıştır</a>
                    <a class="dropdown-item" href="#">@x adlı kişiyi takip et</a>
                    <a class="dropdown-item" href="#">Listelere ekle/Listelerden kaldır</a>
                    <a class="dropdown-item" href="#">@x adlı kişiyi sessize al</a>
                    <a class="dropdown-item" href="#">@x adlı kişiyi engelle</a>
                    <a class="dropdown-item" href="#">Tweeti bildir</a>
                    <a class="dropdown-item" href="{{ route('post.delete', [$post->id]) }}">Tweeti sil</a>
                </div>
                <div>
                    <span>{{ $post->user->name }} @... {{ $post->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                </div>
                <p class="content">{{ $post->content }}</p>
                <!-- Add icon library -->
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <a href="{{ route('home') }}"><i class="fa fa-home"></i></a>
                <button class="btn"><i class="fa fa-retweet"></i></button>
                @auth
                <a href="{{ route('post.like', [$post->id]) }}"><i class="fa fa-heart {{ in_array(auth()->user()->id, $post->likes()->pluck('user_id')->toArray()) ? 'liked' : 'unliked' }}"></i> {{ $post->likes()->count() }}</a>
                @endauth
                @guest
                <a href="#"><i class="fa fa-heart"></i></a>
                @endguest
                <button class="btn"><i class="fa fa-share"></i></button>
                <hr><br>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection