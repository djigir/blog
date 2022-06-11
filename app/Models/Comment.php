<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Comment
 *
 * @property int $id
 * @property int $user_id
 * @property int $post_id
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $date_carbon
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUserId($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\CommentFactory factory(...$parameters)
 */
class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded = false;

    const PER_PAGE = 12;

    /* Getters */
    public function getDateCarbonAttribute()
    {
        return Carbon::parse($this->created_at);
    }

    /* Relations */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    // TODO проверить связь тут рабатает и один к одному и один ко многим
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
