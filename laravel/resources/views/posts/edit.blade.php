@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', $post->slug) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required autocomplete="title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="thumbnail" class="col-md-4 col-form-label text-md-end">{{ __('Thumbnail') }}</label>
                            <div class="col-md-6">
                                <img class="img-fluid mb-2" src="{{ $post->thumbnail() }}" style="max-width: 100px;"><br>
                                <input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" autofocus>
                                @error('thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>
                            <div class="col-md-6">
                                <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                                    <option value="#">--- SELECT CATEGORY ---</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $post->category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="tags" class="col-md-4 col-form-label text-md-end">Tags</label>
                            <div class="col-md-6">
                                <select name="tags" id="tags" class="form-control @error('tags') is-invalid @enderror">
                                    <option value="#">--- SELECT TAGS ---</option>
                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}" @if ($tag->id == old('tags')) selected @endif>{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('tags')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="content" name="content">{{ $post->content}}</textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
