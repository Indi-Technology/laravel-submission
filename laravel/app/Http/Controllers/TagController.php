<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use App\Services\TagServices;;

class TagController extends Controller
{
    public function index()
    {
        $tags   = Tag::paginate(20);
        return view('tags.index', [
            'tags'  => $tags
        ]);
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(TagRequest $request, TagServices $tagServices)
    {
        $tagServices->handleStore($request);
        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', [
            'tag'   => $tag
        ]);
    }

    public function update(Tag $tag, TagRequest $request, TagServices $tagServices)
    {
        $tagServices->handleUpdate($request, $tag);
        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag, TagServices $tagServices)
    {
        $tagServices->handleDestroy($tag);
        return redirect()->route('tags.index');
    }
}
