<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostServices
{
    public function handleStore($request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->id();
        $data['slug'] = str()->slug($data['title']);
        $thumbnail = $request->file('thumbnail')->store('thumbnails/post');

        $data['thumbnail'] = $thumbnail;
        $post = Post::create($data);
        $post->tags()->attach($request->tags);
    }

    public function handleUpdate($request, $post)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->id();
        $data['slug'] = str()->slug($data['title']);

        if ($request->hasFile('thumbnail')) {
            Storage::delete($post->thumbnail);
            $thumbnail = $request->file('thumbnail')->store('thumbnails/post');
            $data['thumbnail'] = $thumbnail;
        }
        $post->tags()->sync($request->tags);
        $post->update($data);
    }

    public function handleDestroy($post)
    {
        Storage::delete($post->thumbnail);
        $post->delete();
    }
}
