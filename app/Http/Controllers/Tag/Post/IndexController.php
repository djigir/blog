<?php

namespace App\Http\Controllers\Tag\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $posts = $tag->posts()->orderBy('created_at', 'DESC')->paginate(6);
        return view('tag.post.index', compact('posts', 'tag'));
    }
}
