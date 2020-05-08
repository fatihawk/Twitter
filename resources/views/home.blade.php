@extends('layouts.app')
@section('content')
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
                    @foreach ($posts as $post)
                    <p>{{ $post->user->name }} - {{ $post->created_at }}</p>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('post.delete', [$post->id]) }}">Sil</a>
                    <br>
                    <hr>
                    @endforeach
                </div>
            </div>
@endsection
