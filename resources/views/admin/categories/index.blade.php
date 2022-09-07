@extends('layouts.admin.app')

@section('content')
    <div class="container">

        <div class="marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
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
                <table class="table">
                    <thead>

                        <tr>
                            <th scope="col">Category Name</th>
                            <th scope="col">Created_At</th>
                            <th scope="col">Updated_At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->updated_at->format('Y-M-D') }}</td>
                                <td>{{ $category->created_at->format('Y-M-D') }}</td>
                                <td>
                                    <a href="{{ route('admin-category.create') }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-plus-lg"></i>
                                        Create
                                    </a>
                                    <a href="{{ route('admin-category.edit', $category->id) }}"
                                        class="btn btn-warning btn-sm text-white">
                                        <i class="bi bi-pencil"></i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#Modal{{ $category->id }}">
                                        <i class="bi bi-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="Modal{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white">Are you sure?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-white">
                                            <p>This is irreversible action, think carefully!.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('admin-category.destroy', $category->id) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-dark">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.row -->
        </div>
    </div><!-- /.container -->
@endsection
