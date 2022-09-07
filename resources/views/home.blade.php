@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <div class="list-group"> --}}
                    @forelse ($posts as $post)
                    <div class="container ">
                        <div class="row row-cols-auto align-items-center ">
                            <a href="{{ route('posts.show', $post->slug) }}" class="col text-decoration-none " >
                                <img src="{{ $post->thumbnail() }}" width="70px">
                            </a>
                            <a href="{{ route('posts.show', $post->slug) }}" class="col text-decoration-none text-reset" >
                                <h4 class="p-2">{{ $post->title }}</h4>
                            </a>
                            <div class="col">
                                @foreach ($post->tags as $tag )
                                <a href="{{ route('tags.show', $tag->slug) }}" class="col text-decoration-none" >
                                    <span class="badge rounded-pill text-bg-secondary mb-2">#{{ $tag->name }}</span>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div><hr>
                    @empty
                        <p>No posts yet.</p>
                    @endforelse
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
