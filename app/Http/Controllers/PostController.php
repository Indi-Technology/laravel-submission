<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Services\PostServices;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isNull;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request, PostServices $postServices)
    {
        $postServices->handleStore($request);

        return redirect()->route('home');
    }

    public function edit(Post $post)
    {
        $this->authorize('owner', $post);

        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(PostRequest $request, Post $post, PostServices $postServices)
    {
        $this->authorize('owner', $post);

        $postServices->handleUpdate($request, $post);

        return redirect()->route('posts.show', $post->slug);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function destroy(Post $post, PostServices $postServices)
    {
        $this->authorize('owner', $post);

        $postServices->handleDestroy($post);

        return redirect()->route('users.profile', auth()->user()->username);
    }
}
