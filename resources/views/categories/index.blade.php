@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href="{{ route('categories.create') }}">Add Category</a><br><br>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>Categories</div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td colspan="2">
                                            <a class="btn btn-secondary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                            <a class="btn btn-danger" href="{{ route('categories.destroy', $category->id) }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('delete-category').submit();">
                                                         Delete
                                            </a>

                                            <form id="delete-category" action="{{ route('categories.destroy', $category->id) }}"
                                                method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
