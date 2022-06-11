<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likePosts()->orderBy('created_at', 'desc')->paginate(9);
        return view('personal.liked.index', compact('posts'));
    }
}
