@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
            <p>Görsellerim</p>
        </h3><br><br>
    </div>
    <div class="card-body">
        @foreach ($my_images as $images)
        <div class="row no-gutters">
            <div class="col-1">
                <img src="{{ asset(auth()->user()->avatar) }}" width="100%" alt="" style="border-radius: 50%">
            </div>
            <div class="col-11">
                <div>
                    <span>{{ $images->user->name }} @...
                        {{ $images->created_at->diffForHumans(now(), ['short' => true]) }}</span><br>
                </div><br><br><br>
                <img src="{{ asset($images->image) }}" width="50%" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection