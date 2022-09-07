@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="text-uppercase">Post</h4>
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-info float-end" href="{{ route('posts.create') }}">CREATE</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase">#</th>
                            <th class="text-center text-uppercase">Title</th>
                            <th class="text-center text-uppercase">Category</th>
                            <th class="text-center text-uppercase">Tags</th>
                            <th class="text-center text-uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $key => $post)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="text-center">{{ $post->title }}</td>
                            <td class="text-center">{{ $post->category->name }}</td>
                            <td class="text-center">
                                @foreach ($post->tags as $tag)
                                {{ $tag->name }}
                                @endforeach
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('posts.show',$post) }}">READ MORE</a>
                                <a class="btn btn-warning" href="{{ route('posts.edit',$post) }}">UPDATE</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-danger">DELETE</button>
                                </form>
                                </a>
                            </td>
                            @empty
                            <td colspan="4" class="text-center">No Post Yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
