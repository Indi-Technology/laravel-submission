@extends('layouts.admin.app')

@section('content')
    <main>
        <div class="container marketing">
            @if (session()->has('success-delete'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success-delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success-update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success-update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success-create'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success-create') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @foreach ($post as $posts)
                <div class="row featurette shadow p-3 mb-5 bg-body rounded ">
                    <div class="col-lg-6 order-md-2 ">
                        <h2 class="featurette-heading fw-normal lh-1 fw-bold ">{{ $posts->title }}</h2>
                        Category : <span class="text-muted">{{ $posts->category->name }}
                        </span> | <span class="text-muted">{{ $posts->user->username }}</span>

                        <p class="lead">{{ $posts->excerpt }} <a href="{{ route('admin-post.show', $posts->slug) }}">read
                                more</a></p>
                    </div>


                    <div class="col-md-5 order-md-1">
                        <img class="rounded bd-placeholder-img  img-fluid mx-auto " width="500" height="500"
                            src="{{ $posts->image() }}" alt="{{ $posts->title }}">
                        </img>
                    </div>
                </div>

                <div class="mt-2 card-body">
                    <div class="row row-cols-auto g3">
                        <div class="col">
                            <button type="button" class="btn btn-primary">
                                <a href="{{ route('admin-post.create') }}" class="text-white">
                                    <i class="bi bi-plus-lg"></i></a>
                            </button>
                        </div>
                        <div class="col">
                            <form action="{{ route('admin-post.destroy', $posts->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-warning">
                                <a href="{{ route('admin-post.edit', $posts->slug) }}" class="text-white">
                                    <i class="bi bi-pen"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->
            @endforeach
        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    </main>
@endsection
