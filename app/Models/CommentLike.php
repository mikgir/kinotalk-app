<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CommentLike
 *
 * @property int $user_id
 * @property int $comment_id
 * @property int $like_type_id
 *
 * @property Comment $comment
 * @property LikeType $like_type
 * @property User $user
 *
 * @package App\Models
 */
class CommentLike extends Model
{
	protected $table = 'comment_likes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'comment_id' => 'int',
		'like_type_id' => 'int'
	];

	public function comment(): BelongsTo
    {
		return $this->belongsTo(Comment::class);
	}

	public function like_type(): BelongsTo
    {
		return $this->belongsTo(LikeType::class);
	}

	public function user(): BelongsTo
    {
		return $this->belongsTo(User::class);
	}
}
