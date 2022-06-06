<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users_count = User::all()->count();
        $posts_count = Post::all()->count();
        $categories_count = Category::all()->count();
        $tags_count = Tag::all()->count();
        return view('admin.main.index', compact('users_count', 'posts_count', 'categories_count', 'tags_count'));

//        $data = [];
//        $data['users_count'] = User::all()->count();
//        $data['posts_count'] = Post::all()->count();
//        $data['categories_count'] = Comment::all()->count();
//        $data['tags_count'] = Tag::all()->count();
    }
}
