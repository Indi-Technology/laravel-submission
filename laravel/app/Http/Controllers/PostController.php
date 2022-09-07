<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Services\PostServices;
use App\Http\Requests\PostRequest;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts      = Post::with(['category', 'user', 'tags'])->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags       = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    public function store(PostRequest $request, PostServices $postServices)
    {
        // dd($request->all());
        $postServices->handleStore($request);
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.show', compact('post', 'categories', 'tags'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags       = Tag::all();
        return view('posts.edit', compact('categories', 'post', 'tags'));
    }

    public function update(PostRequest $request, Post $post, PostServices $postServices)
    {
        $postServices->handleUpdate($request, $post);
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post, PostServices $postServices)
    {
        $postServices->handleDestroy($post);
        return redirect()->route('posts.index');
    }
}
