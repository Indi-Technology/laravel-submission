@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-uppercase mb-3">Article</h3>
        </div>
    </div>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center text-uppercase font-weight-bolder mb-3">{{ $post->title }}</h5>
                    <img class="img-fluid mt-1 mb-2" src="{{ $post->thumbnail() }}"><br>
                    <a class="btn btn-primary float-end" href="{{route('article.show', $post)}}">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
