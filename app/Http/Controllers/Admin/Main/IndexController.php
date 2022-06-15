<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
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
        $contacts_count = Contact::all()->count();
        return view('admin.main.index', compact(
            'users_count',
            'posts_count',
            'categories_count',
            'tags_count',
            'contacts_count'
        ));
    }
}
