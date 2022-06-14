<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }
}
