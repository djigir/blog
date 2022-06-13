<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostUserLike;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(Post::PER_PAGE);

        $random_posts = Post::get()->random(4);
        if (!is_null(auth()->user())) {
            // рандомные посты которые не лайкал зарегистрированый пользователь
            $random_posts = Post::whereNotIn('id', PostUserLike::first()->LikedPostsIdsByUser)
                ->get()
                ->random(4);
        }
        $most_liked_posts = Post::orderBy('liked_users_count', 'DESC')->get()->take(4);

        $popular_categories = Category::withCount('posts')
            ->orderBy('posts_count', 'DESC')
            ->get()
            ->take(3);

        $top_tags = Tag::withCount('posts')
            ->orderBy('posts_count', 'DESC')
            ->get()
            ->take(9);

        return view('post.index', compact(
            'posts',
            'random_posts',
            'most_liked_posts',
            'popular_categories',
            'top_tags'
        ));
    }
}
