<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();

        return view('welcome', compact('posts'));
    }
}
