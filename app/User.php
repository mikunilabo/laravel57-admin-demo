<?php

namespace App;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use MustVerifyEmail, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return BelongsToMany
     */
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(self::class, 'followers', 'following_id', 'user_id')->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function followings(): BelongsToMany
    {
        return $this->belongsToMany(self::class, 'followers', 'user_id', 'following_id')->withTimestamps();
    }

    /**
     *
     * @param int $userId
     * @return self
     */
    public function follow(int $userId): self
    {
        $this->followings()->attach($userId);
        return $this;
    }

    /**
     *
     * @param int $userId
     * @return self
     */
    public function unfollow(int $userId): self
    {
        $this->followings()->detach($userId);
        return $this;
    }

    /**
     *
     * @param int $userId
     * @return bool
     */
    public function isFollowing(int $userId): bool
    {
        return (bool) $this->followings()->where('following_id', $userId)->first();
    }

}
