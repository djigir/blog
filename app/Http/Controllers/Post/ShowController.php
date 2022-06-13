<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $post_created_date = Carbon::parse($post->created_at);
        $related_posts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);
        $comments = $post->comments()->orderBy('created_at', 'DESC')->get();

        return view('post.show',
            compact(
                'post',
                'post_created_date',
                'related_posts',
                'comments'
            ));
    }
}
