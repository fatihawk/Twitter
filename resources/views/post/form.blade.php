@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gündem</div>

                <div class="card-body">
                    <form action="{{ route('post.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(!empty($post))
                        <input type="hidden" name="id" value="{{ $post->id}}">
                        @endif
                        <textarea name="content" id="" cols="3" rows="3" maxlength="240" class="form-control"
                            placeholder="İçerik">{{ empty($post ->content) ? '': $post->content }}</textarea>
                        <input type="file" name="image" id="">
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection