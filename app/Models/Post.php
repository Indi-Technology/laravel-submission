<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo((User::class));
    }

    public function category()
    {
        return $this->belongsTo((Category::class));
    }

    public function tags()
    {
        return $this->belongsToMany((Tag::class));
    }

    public function thumbnail()
    {
        return Storage::url($this->thumbnail);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
