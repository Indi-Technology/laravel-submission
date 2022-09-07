<?php

namespace App\Services;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostServices
{
    public function handleStore($request)
    {
        $data = $request->validated();

        $data['user_id']        = auth()->id();
        $data['slug']           = str()->slug($data['title']);
        $thumbnail              = $request->file('thumbnail')->store('app/thumbnails/post');
        $data['thumbnail']      = $thumbnail;
        $data['category_id']    = $request->category;
        // $data['tags']           = $request->tags;

        $post = Post::create($data);

        $tags   = $request->tags;
        $post->tags()->attach($tags);
    }

    public function handleUpdate($request, $post)
    {
        $data = $request->validated();

        $data['user_id']        = auth()->id();
        $data['slug']           = str()->slug($data['title']);
        $data['category_id']    = $request->category;
        $data['tags']           = $request->tags;
        $tags                   = $data['tags'];


        if ($request->hasFile('thumbnail')) {
            Storage::delete($post->thumbnail);
            $thumbnail = $request->file('thumbnail')->store('app/thumbnails/post');
            $data['thumbnail'] = $thumbnail;
        }

        $post->tags()->sync($tags);
        $post->update($data);
    }

    public function handleDestroy($post)
    {
        Storage::delete($post->thumbnail);
        $post->tags()->detach();
        $post->delete();
    }
}
