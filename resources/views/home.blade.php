@extends('layouts.app')
@section('content')
            <div class="card">
                <div class="card-header"><h3>Anasayfa</h3></div>
                    <div class="card-body">
                    <form action="{{ route('post.save') }}" method="POST">
                        @csrf
                        @if(!empty($post))
                        <input type="hidden" name="id" value="{{ $post -> id}}">
                        @endif
                        <textarea name="content" id="" cols="3" rows="3" maxlength="140" class="form-control" placeholder="İçerik">{{ empty($post ->content) ? '': $post->content }}</textarea>
                        <button type="submit" class="btn btn-primary gonder">Tweetle</button>
                    </div>
                    <div class="card-body">
                    @foreach ($posts as $post)
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown dropleft float-right" data-toggle="dropdown" ></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">İlgimi çekmiyor</a>
                          <a class="dropdown-item" href="#">Twiti katıştır</a>
                          <a class="dropdown-item" href="#">@x adlı kişiyi takip et</a>
                          <a class="dropdown-item" href="#">Listelere ekle/Listelerden kaldır</a>
                          <a class="dropdown-item" href="#">@x adlı kişiyi sessize al</a>
                          <a class="dropdown-item" href="#">@x adlı kişiyi engelle</a>
                          <a class="dropdown-item" href="#">Tweeti bildir</a>
                        </div>
                    <img src="avatar.png" alt="Avatar" class="avatar">
                    <h4><p>{{ $post->user->name }} - {{ $post->created_at }}</p></h4>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('post.delete', [$post->id]) }}">Sil</a><br>
                    <!-- Add icon library -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <button class="btn"><i class="fa fa-home"></i></button>
                    <button class="btn"><i class="fa fa-retweet"></i></button>
                    <button class="btn"><i class="fa fa-heart"></i></button>
                    <button class="btn"><i class="fa fa-share"></i></button>
                    <hr><br>
                    @endforeach
                </div>
            </div>
@endsection
