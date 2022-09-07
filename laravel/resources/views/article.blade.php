@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h5 class="text-center text-uppercase fw-bold mt-4 mb-2">{{ $post->title }}</h5>
            <img class="img-fluid mt-1 mb-2" src="{{ $post->thumbnail() }}" style="max-width: auto;"><br>
            <p class="card-text mt-2" style="text-align: justify;">{{ $post->content }}</p>
            <p class="card-text text-muted">
                Category: {{ $post->category->name }}<br>
                @foreach ($post->tags as $tag)
                Tags: {{ $tag->name }}
                @endforeach
            </p>
            <a class="btn btn-primary btn-sm" href="{{route('home')}}">BACK</a>
        </div>
    </div>
</div>
@endsection
