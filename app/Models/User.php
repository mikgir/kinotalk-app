<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;


/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|ArticleLike[] $article_likes
 * @property Collection|Article[] $articles
 * @property Collection|CommentLike[] $comment_likes
 * @property Collection|Comment[] $comments
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function article_likes(): HasMany
    {
		return $this->hasMany(ArticleLike::class);
	}

	public function articles(): HasMany
    {
		return $this->hasMany(Article::class);
	}

	public function comment_likes(): HasMany
    {
		return $this->hasMany(CommentLike::class);
	}

	public function comments(): HasMany
    {
		return $this->hasMany(Comment::class);
	}

//	public function roles(): BelongsToMany
//    {
//		return $this->belongsToMany(Role::class, 'user_roles');
//	}
}
