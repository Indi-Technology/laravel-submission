<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PostServices
{
   public function handleStore($request)
   {
      $data = $request->validated();

      $data['user_id'] = auth()->id();
      $data['slug'] = str()->slug($data['title']);

      $image = $request->file('image')->store('images/post');
      $data['image'] = $image;

      Post::create($data);
   }


   public function handleUpdate($request, $post)
   {

      $data = $request->validated();

      $data['user_id'] = auth()->id();
      $data['slug'] = str()->slug($data['title']);

      if ($request->hasFile('image')) {
         Storage::delete($post->image);
         $image = $request->file('image')->store('images/post');
         $data['image'] = $image;
      }

      $post->update($data);
   }

   public function handleDestroy($post)
   {
      Storage::delete($post->image);
      $post->delete();
   }
}
