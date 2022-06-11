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
        // TODO onEachSide() не рабоает в контролере посмотреть как это изменить (помагает с пагинацией)
        $posts = Post::orderBy('created_at', 'DESC')->paginate(Post::PER_PAGE)->onEachSide(1);

        if (!is_null(auth()->user())) {
            // TODO Найти способ получить не пролайканые посты через отношение глянуть модели Posts и Post_user_likes
            // получаем все id постов которые лайкнул пользователь
            $post_with_user_likes = PostUserLike::where('user_id', auth()->user()->id)
                ->with('posts')
                ->pluck('post_id')
                ->toArray();

            // рандомные  посты которые не лайкал пользователь
            $random_posts = Post::whereNotIn('id', $post_with_user_likes)
                ->get()
                ->random(4);
        } else {
            $random_posts = Post::get()->random(4);
        }

        $most_liked_posts = Post::withCount('likedUsers')
            ->orderBy('liked_users_count', 'DESC')
            ->get()
            ->take(4);

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
