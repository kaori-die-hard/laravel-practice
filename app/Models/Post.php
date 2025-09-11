<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * 投稿モデルクラス
 *
 * @property int $id ID
 * @property int|null $user_id ユーザID
 * @property string|null $title タイトル
 * @property string|null $text 本文
 * @property Carbon|null $created_at 作成日時
 * @property Carbon|null $updated_at 更新日時
 * @property-read \App\Models\User|null $user
 * @method static Builder<static>|Post newModelQuery()
 * @method static Builder<static>|Post newQuery()
 * @method static Builder<static>|Post query()
 * @method static Builder<static>|Post whereCreatedAt($value)
 * @method static Builder<static>|Post whereId($value)
 * @method static Builder<static>|Post whereText($value)
 * @method static Builder<static>|Post whereTitle($value)
 * @method static Builder<static>|Post whereUpdatedAt($value)
 * @method static Builder<static>|Post whereUserId($value)
 * @mixin Eloquent
 */
class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'text',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    /**
     * ユーザモデルとのリレーション
     *
     * @return BelongsTo<User, Post>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}