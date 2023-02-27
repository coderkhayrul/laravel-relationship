<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();
        return $posts;
    }
    public function insert()
    {
        $posts = Post::limit(5)->get();
        foreach ($posts as $key => $post) {
            $tags = Tag::all()->random(3)->pluck('id')->toArray();
            $post->tags()->attach($tags);
        }
        return redirect('/');
    }
}
