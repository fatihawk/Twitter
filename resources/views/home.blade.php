@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h3><a href="{{ route('home') }}">Anasayfa</a></h3>
    </div>
    <div class="card-body">
        <form action="{{ route('post.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @auth
            @if(!empty($post))
            <input type="hidden" name="id" value="{{ $post ->id}}">
            @endif
            <textarea name="content" id="" cols="3" rows="3" maxlength="240" class="form-control"
                placeholder="İçerik">{{ empty($post ->content) ? '': $post->content }}</textarea>
            <input type="file" name="image" id="" class="image">
            <input type="file" name="video" id="" class="video">
            <button type="submit" class="btn btn-primary gonder">Tweetle</button>
            @endauth
        </form>
    </div>
    <div class="card-body">
        @foreach ($posts as $post)
        <div class="row no-gutters">
            @auth
            <div class="col-1">
                <img src="{{ asset(auth()->user()->avatar) }}" width="100%" alt="" style="border-radius: 50%">
            </div>
            @endauth
            <div class="col-11">
                <div class="dropdown">
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
                        <a class="dropdown-item" href="{{ route('post.form.edit',[$post->id])}}">Düzenle</a>
                    </div>
                </div>
                <div>
                    <span>{{ $post->user->name }} @...
                        {{ $post->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                </div>
                <p class="content">{{ $post->content }}</p>
                <img src="{{ asset($post->image) }}" width="50%" alt=""><br><br>
                <video width="320" height="240" controls>
                    <source src="{{ asset($post->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video> <br><br><br><br>
                <a href="{{ route('home') }}"><i class="fa fa-home"></i></a>
                <button class="btn"><i class="fa fa-retweet"></i></button>
                @auth
                <a href="{{ route('post.like', [$post->id]) }}"><i
                        class="fa fa-heart {{ in_array(auth()->user()->id, $post->likes()->pluck('user_id')->toArray()) ? 'liked' : 'unliked' }}"></i>
                    {{ $post->likes()->count() }}</a>
                @endauth
                @guest
                <a href="#"><i class="fa fa-heart"></i></a>
                @endguest
                <button class="btn"><i class="fa fa-share"></i></button>
                <h5>
                    <p>Yorum</p>
                </h5>
                <form action="{{ route('comment.save') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea name="text" id="" cols="3" rows="3" maxlength="240" class="form-control"></textarea>
                    <button type="submit" class="btn btn-primary gonder">Yanıtla</button>
                </form>
                <hr>
                <h5>
                    <p>Yorumlar</p>
                </h5>
                @foreach ($post->comments as $comment)
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown dropleft float-right"
                        data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('comment.delete', [$comment->id]) }}">Yanıtı sil</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset(auth()->user()->avatar) }}" width="10%" alt="" style="border-radius:50%">
                    <span>{{ $comment->user->name }} @...
                        {{ $comment->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                </div>
                <p>{{ $comment->text }}</p>
                <hr>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection