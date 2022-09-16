@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.update', $post->slug) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            {{-- title --}}
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

                            {{-- category --}}
                            <div class="row mb-3">
                                <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>

                                <div class="col-md-6">
                                    <select name="category_id" id="category" class="form-control">
                                        <option value="0">--- SELECT CATEGORY ---</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- tag --}}
                            <div class="row mb-3">
                                <label for="tags" class="col-md-4 col-form-label text-md-end">Tag</label>
                                <div class="col-md-6">
                                    <select name="tags" id="tags" class="form-control @error('tags') is-invalid @enderror" required>
                                        <option value="">--- SELECT TAG ---</option>
                                        @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}" @if ($tag->id == old('tags')) selected @endif>{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('tags')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            {{-- content --}}
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

                            {{-- image --}}
                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>

                                <div class="col-md-6">
                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="image"
                                        value="{{ old('thumbnail') }}" autofocus>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- button --}}
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
