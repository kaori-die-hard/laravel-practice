<?php

namespace App\Models;

use Database\Factories\PasswordResetTokenFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * パスワードリセットトークンモデルクラス
 *
 * @property string $email メールアドレス
 * @property string $token トークン
 * @property Carbon|null $created_at 作成日時
 * @property-read User|null $user
 * @method static PasswordResetTokenFactory factory($count = null, $state = [])
 * @method static Builder<static>|PasswordResetToken newModelQuery()
 * @method static Builder<static>|PasswordResetToken newQuery()
 * @method static Builder<static>|PasswordResetToken query()
 * @method static Builder<static>|PasswordResetToken whereCreatedAt($value)
 * @method static Builder<static>|PasswordResetToken whereEmail($value)
 * @method static Builder<static>|PasswordResetToken whereToken($value)
 * @mixin Eloquent
 */
class PasswordResetToken extends Model
{
    /** @use HasFactory<PasswordResetTokenFactory> */
    use HasFactory;

    protected $fillable = [
        'email',
        'token',
        'created_at',
    ];

    /**
     * ユーザモデルとのリレーション
     *
     * @return BelongsTo<User, PasswordResetToken>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}