<?php

namespace App\Models;

use Database\Factories\SessionFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * セッションモデルクラス
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string $payload
 * @property int $last_activity
 * @property-read User|null $user
 * @method static SessionFactory factory($count = null, $state = [])
 * @method static Builder<static>|Session newModelQuery()
 * @method static Builder<static>|Session newQuery()
 * @method static Builder<static>|Session query()
 * @method static Builder<static>|Session whereId($value)
 * @method static Builder<static>|Session whereIpAddress($value)
 * @method static Builder<static>|Session whereLastActivity($value)
 * @method static Builder<static>|Session wherePayload($value)
 * @method static Builder<static>|Session whereUserAgent($value)
 * @method static Builder<static>|Session whereUserId($value)
 * @mixin Eloquent
 */
class Session extends Model
{
    /** @use HasFactory<SessionFactory> */
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'payload',
    ];

    /**
     * ユーザモデルとのリレーション
     *
     * @return BelongsTo<User, Session>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}