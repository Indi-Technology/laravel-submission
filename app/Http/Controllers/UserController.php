<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;


class UserController extends Controller
{
    public function profile(User $user)
    {

        $posts = $user->posts()->with('user', 'category', 'tags')->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();

        return view('users.profile', [
            'user' => $user,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}
