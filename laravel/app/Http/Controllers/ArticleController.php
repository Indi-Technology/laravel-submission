<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function show(Post $post)
    {
        $categories = Category::all();
        $tags       = Tag::all();
        return view('article', compact('post', 'categories', 'tags'));
    }
}
