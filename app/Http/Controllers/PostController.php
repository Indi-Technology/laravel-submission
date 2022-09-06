<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->paginate(10);

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $user_id = auth()->id();
        $tags = explode('#', $request->tags);
        $validatedData = $request->validated();

        if ($request->has('img')) {
            $validatedData['img'] = $request->file('img')->store('posts');
        }
        $post = Post::create($validatedData + ['user_id' => $user_id]);

        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $post->tags()->attach($tag);
        }
        // Path file uploading
        // Edit post
        // Delete also
        return to_route('posts.index')->with('status', 'New post has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = $post->tags->implode('name', '#');
        return view('post.detail', compact('post', 'tags', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = $post->tags->implode('name', '#');
        return view('post.edit', compact('post', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $tags = explode('#', $request->tags);

        if ($request->has('img')) {
            !is_null($post->img) && Storage::delete($post->img);
            $post->img = $request->file('img')->store('posts');
        }

        $post->update($request->validated() + [
            'img' => $post->img,
        ]);

        $newTags = [];

        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            array_push($newTags, $tag->id);
        }

        $post->tags()->sync($newTags);
        return to_route('posts.index')->with('status', 'Post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->img);
        $post->tags()->detach();
        $post->delete();

        return back()->with('status', 'Post has been deleted.');
    }
}
