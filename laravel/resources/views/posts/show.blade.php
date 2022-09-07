@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <a class="btn btn-primary btn-sm" href="{{route('posts.index')}}">BACK</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-dark my-4">
                <div class="card-header">
                    <h5 class="card-title text-center text-uppercase my-1"><strong>{{ $post->title }}</strong></h5>
                </div>
                <div class="card-body">
                    <center>
                        <img class="img-fluid mt-1 mb-2" src="{{ $post->thumbnail() }}"><br>
                    </center>
                    <p class="card-text mt-2 mb-0">{{ $post->category->name }}</p>
                    <p class="card-text mt-0 mb-1">{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
