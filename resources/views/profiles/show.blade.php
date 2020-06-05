@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <img src="{{ asset($user->avatar) }}" width="100%" alt=""
            style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
        <form action="{{ route('profiles.save', [$user->name]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Profil fotoğrafı seçin</label>
            <input type="file" name="avatar" id="">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
        <span><a href="{{ route('home') }}">Profil Sayfası</a></span><br><br>
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
                    <img src="{{ asset($user->avatar) }}" width="100%" alt="" style="border-radius: 50%">
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
                            <img src="{{ asset($user->avatar) }}" width="100%" alt="" style="border-radius: 50%">
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
            <div class="card-body">
                @foreach ($comments as $comment)
                <div class="row no-gutters">
                    <div class="col-1">
                        <img src="{{ asset($user->avatar) }}" width="100%" alt="" style="border-radius: 50%">
                    </div>
                    <div class="col-11">
                        <div>
                            <span>{{ $comment->post->user->name }} @...
                                {{ $comment->post->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                        </div>
                        <p class="content">{{ $comment->post->content }}</p><br><br>
                        <hr><br><br>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="row no-gutters">
                    <div class="col-1">
                        <img src="{{ asset($user->avatar) }}" width="100%" alt="" style="border-radius: 50%">
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
</div>
@endsection