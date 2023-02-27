<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::with('posts')->get();

        return $tags;
    }

    public function delete()
    {
        Tag::find(19)->posts()->detach();
        return redirect('/');
    }
}
