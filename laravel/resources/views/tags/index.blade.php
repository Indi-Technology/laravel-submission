@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-uppercase">tag</h3>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-info float-end" href="{{ route('tags.create') }}">CREATE</a>
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
                        @forelse ($tags as $key => $tag)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="text-center">{{ $tag->name }}</td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="{{ route('tags.edit', $tag) }}">UPDATE</a>
                                <form action="{{ route('tags.destroy', $tag) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-danger">DELETE</button>
                                </form>
                                </a>
                            </td>
                            @empty
                            <td colspan="3" class="text-center">No Tag Yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $tags->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
