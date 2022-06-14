<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.tag.index', compact('tags'));
    }
}
