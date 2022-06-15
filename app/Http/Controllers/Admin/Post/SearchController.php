<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function __invoke(Request $request)
    {
        $search = $request->input('query');
        $posts = Post::where('title', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('admin.post.search_result', compact('search', 'posts'));
    }
}
