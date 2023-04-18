<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class LikeType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|ArticleLike[] $article_likes
 * @property Collection|CommentLike[] $comment_likes
 *
 * @package App\Models
 */
class LikeType extends Model
{
	protected $table = 'like_types';

	protected $fillable = [
		'name'
	];

	public function article_likes(): HasMany
    {
		return $this->hasMany(ArticleLike::class);
	}

	public function comment_likes(): HasMany
    {
		return $this->hasMany(CommentLike::class);
	}
}
