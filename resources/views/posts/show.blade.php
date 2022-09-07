@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="p-2">
                           <h3> {{ $post->title }} </h3>
                        </div>
                        @can('owner', $post)
                            <div class="ms-auto p-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('posts.edit', $post->slug) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('posts.destroy', $post->slug) }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('delete-post').submit();">
                                                Delete
                                            </a>

                                            <form id="delete-post" action="{{ route('posts.destroy', $post->slug) }}"
                                                method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endcan
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                <img src="{{ $post->thumbnail() }}" class="img-fluid img-thumbnail" width="60%">
                                </div>
                                <p class="card-text"><?=$post->content ?></p>
                            </div>
                        </div>
                        <hr>

                        Category : {{ $post->category->category_name  }}<br>
                        Tags :
                        @foreach ($post->tags as $tag )
                        <a href="{{ route('tags.show', $tag->slug) }}" class="text-decoration-none" >
                            <span class="badge rounded-pill text-bg-secondary mb-2">#{{ $tag->name }}</span>
                        </a>
                        @endforeach
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-muted">Posted by {{ $post->user->username  }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
