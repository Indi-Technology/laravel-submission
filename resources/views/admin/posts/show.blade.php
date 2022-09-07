@extends('layouts.admin.app')

@section('content')
    <main>

        <div class="container">
            <div class="row d-flex align-content-center justify-content-center">
                <div class="col-lg-8">
                    <div class="card mb-3">
                        <img class="rounded  img-fluid mx-auto mt-3" width="500" height="250" src="{{ $post->image() }}"
                            alt="{{ $post->title }}">
                        </img>
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="card-title fw-bold">{{ $post->title }}</h1>
                                Category : <span class="text-muted">{{ $post->category->name }}
                                </span> | {{ $post->user->username }}
                                <p class="card-text"><small
                                        class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                            </div>
                            <p class="mt-4 card-text fs-4 lh-base">{{ $post->body }}</p>
                            <a href="{{ route('admin-post.index') }}"
                                class="mt-5 mb-5 btn btn-dark card-link text-decoration-none">Back !</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
    </main>
@endsection
