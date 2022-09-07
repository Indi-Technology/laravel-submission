@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.update', $post->slug) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="row mb-3">
                                <label for="category_id" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                                <div class="col-md-6">
                                    <select class="form-select" name="category_id">
                                        @foreach ($categories as $category)
                                        @if ($category->id == $post->category_id)
                                        <option value=" {{ $category->id}}" selected="selected">{{ $category->category_name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endif
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="thumbnail"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Thumbnail') }}</label>

                                <div class="col-md-6">
                                    <input id="thumbnail" type="file"
                                        class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail"
                                        value="{{ old('thumbnail') }}" autofocus>

                                    @error('thumbnail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="title"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="title"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title') ?? $post->title }}" required autocomplete="title">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tags" class="col-md-4 col-form-label text-md-end">{{ __('Tags') }}</label>

                                <div class="col-md-6">
                                    <select class="form-select" id="select2" name="tags[]" multiple="multiple">
                                        @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            @foreach ($post->tags as $value)
                                            @if ($tag->id == $value->id)
                                            selected
                                            @endif
                                            @endforeach>
                                            {{ $tag->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('tags')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="content"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="write your content here..." id="content" name="content">
                                        {{ old('content') ?? $post->content}}
                                    </textarea>


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
