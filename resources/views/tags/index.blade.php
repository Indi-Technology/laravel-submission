@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="p-2 "><h5>Manage Tag</h5></div>
                    <div class="ms-auto p-2">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary btn-sm" href="{{ route('tags.create') }}">Add New</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                    <table class="table">
                         @forelse ($tags as $tag)
                        <tbody>
                          <tr>
                            <th scope="row"><a href="#" class="text-reset text-decoration-none">{{$tag->name }}</a></th>
                            <td class="text-end">

                                <form method="POST" action="{{ route('tags.destroy', $tag->slug) }}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('tags.edit', $tag->slug) }}" class="btn btn-light btn-sm">Edit</a> |
                                    <button type="submit" class="btn btn-light btn-sm">Delete</button>
                                </form>
                            </td>
                          </tr>
                        </tbody>

                        @empty
                            <p>No tags yet.</p>
                        @endforelse
                      </table>
                      {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
