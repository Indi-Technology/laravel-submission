<?php

namespace App\Services;

use App\Models\Tag;


class TagServices
{
    public function handleStore($request)
    {
        $data = $request->validated();
        Tag::create($data);
    }

    public function handleUpdate($request, $tag)
    {
        $data = $request->validated();
        $tag->update($data);
    }

    public function handleDestroy($tag)
    {
        $tag->delete();
    }
}
