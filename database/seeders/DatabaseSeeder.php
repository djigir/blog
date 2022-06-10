<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\PostUserLike;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(30)->create();
        $c = Category::factory(10)->create();
        $posts = Post::factory(35)->create();
        $tags = Tag::factory(50)->create();
        $post_tag = PostTag::factory(20)->create();
        $pul = PostUserLike::factory(500)->create();
        $comments = Comment::factory(300)->create();

        foreach ($posts as $post) {
            $tags_ids = $tags->random(5)->pluck('id');
            $post->tags()->attach($tags_ids);
        }

    }
}
