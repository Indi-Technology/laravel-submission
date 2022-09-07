<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Services\PostServices;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $post = Post::get();

        return view('admin.posts.index', [
            'post' => $post,

        ]);
    }

    public function create(Post $post)
    {
        return view('admin.posts.create', [
            'post' => $post,
            'categories' => Category::get(['id', 'name']),
        ]);
    }

    public function show(Post $post)
    {

        return view('admin.posts.show', [
            'post' => $post,
            'categories' => Category::get(['id', 'name']),
        ]);
    }

    public function store(PostRequest $request, PostServices $postServices)
    {
        $postServices->handleStore($request);

        return redirect()->route('admin-post.index')->with('success-create', 'Successfuly Created New Data');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::get(['id', 'name']),
        ]);
    }

    public function update(PostRequest $request, PostServices $postServices, Post $post)
    {
        $postServices->handleUpdate($request, $post);

        return redirect()->route('admin-post.index')->with('success-update', 'Successfuly Updated New Data !');
    }

    public function destroy(Post $post, PostServices $postServices)
    {

        $postServices->handleDestroy($post);

        return redirect()->route('admin-post.index')->with('success-delete', 'Data Successfuly Deleted !');
    }
}
