<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PostUserLike
 *
 * @property int $id
 * @property int $post_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereUserId($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\PostUserLikeFactory factory(...$parameters)
 */
class PostUserLike extends Model
{
    use HasFactory;
    protected $table = 'post_user_likes';
    protected $guarded = false;

    /* Getters */
    public function getLikedPostsIdsByUserAttribute()
    {
        return PostUserLike::where('user_id', auth()->user()->id)->pluck('post_id')->toArray();
    }

}
