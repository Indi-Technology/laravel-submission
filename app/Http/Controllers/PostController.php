<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Services\PostServices;
use App\Http\Requests\PostRequest;
use App\Models\Tag;

class PostController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    public function store(PostRequest $request, PostServices $postServices)
    {
        $postServices->handleStore($request);

        return redirect()->route('home');
    }

    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.show', compact('post', 'categories', 'tags'));
    }

    public function edit(Post $post)
    {
        $this->authorize('owner', $post);
        $tags = Tag::all();
        $categories = Category::get();
        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(PostRequest $request, Post $post, PostServices $postServices)
    {
        $this->authorize('owner', $post);

        $postServices->handleUpdate($request, $post);

        return redirect()->route('posts.show', $post->slug);
    }

    public function destroy(Post $post, PostServices $postServices)
    {
        $this->authorize('owner', $post);

        $postServices->handleDestroy($post);

        return redirect()->route('users.profile', auth()->user()->username);
    }
}
