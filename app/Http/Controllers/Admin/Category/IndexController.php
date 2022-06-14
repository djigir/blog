<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }
}
