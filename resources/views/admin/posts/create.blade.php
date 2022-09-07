@extends('layouts.admin.app')


@section('content')
    <div class="container">
        <div class="row d-flex align-content-center justify-content-center">
            <div class="col-md-8">
                <div class="card card-body">
                    <div class="text-center  border-3 border-bottom border-danger">
                        <h1>Create New Post</h1>
                    </div>

                    <div class="container mt-2 mb-2 d-flex align-content-center justify-content-center">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin-post.store') }}" method="post" enctype="multipart/form-data"
                            class="col-lg-12 row g-3">
                            @csrf

                            <div class="col-md-12">
                                <label for="image">upload image (allowed format: .png, .jpeg, .jpg, .webp)</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image" value="{{ old('image') }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title"
                                    value="{{ old('title') ?? $post->title }}">
                            </div>
                            <div class="col-md-12">
                                <label for="category" class="form-label">Category</label>

                                <select class="form-select" name="category_id" id="category_id">
                                    <option selected>Choose your category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="excerpt" class="form-label">Excerpt</label>
                                <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="2"
                                    placeholder="excerpt" value="{{ old('excerpt') ?? $post->excerpt }}"></textarea>

                                @error('excerpt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control" id="body" name="body" rows="4" placeholder="body"
                                    value="{{ old('body') ?? $post->body }}"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
