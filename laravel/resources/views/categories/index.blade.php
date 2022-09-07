@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-uppercase">Category</h3>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-info float-end" href="{{ route('categories.create') }}">CREATE</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase">#</th>
                            <th class="text-center text-uppercase">Name</th>
                            <th class="text-center text-uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $key => $category)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="text-center">{{ $category->name }}</td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="{{ route('categories.edit', $category) }}">UPDATE</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-danger">DELETE</button>
                                </form>
                                </a>
                            </td>
                            @empty
                            <td colspan="3" class="text-center">No Category Yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
