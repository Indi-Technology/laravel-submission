@extends('layouts.admin.app')


@section('content')
    <div class="container mt-2 mb-2 d-flex align-content-center justify-content-center">

        <form action="{{ route('admin-category.store') }}" method="POST" class="col-lg-12 row g-3">
            @csrf

            <div class="col-md-12">
                <label for="name" class="form-label">Category</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="name" value="{{ old('name') ?? $categories->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

    </div>
@endsection
