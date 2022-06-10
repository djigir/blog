<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::withCount('posts')->orderByDesc('posts_count')->paginate(Category::PER_PAGE);
        return view('category.index', compact('categories'));
    }
}
