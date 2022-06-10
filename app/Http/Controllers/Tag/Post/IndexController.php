<?php

namespace App\Http\Controllers\Tag\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // TODO попробовать переписать все с отношениями через 2 модели скорее всего
        $posts_tag_ids = PostTag::where('tag_id', $tag->id)->get()->pluck('post_id')->toArray();
        $posts = Post::whereIn('id', $posts_tag_ids)->paginate(6);
        return view('category.post.index', compact('posts'));
    }
}
