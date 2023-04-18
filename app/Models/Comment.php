<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int|null $parent_id
 * @property int $user_id
 * @property int $article_id
 * @property string $body
 * @property string $status
 * @property bool $featured
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 * @property Comment|null $comment
 * @property User $user
 * @property Collection|CommentLike[] $comment_likes
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';

	protected $casts = [
		'parent_id' => 'int',
		'user_id' => 'int',
		'article_id' => 'int',
		'featured' => 'bool'
	];

	protected $fillable = [
		'parent_id',
		'user_id',
		'article_id',
		'body',
		'status',
		'featured'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}

	public function comment()
	{
		return $this->belongsTo(Comment::class, 'parent_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comment_likes()
	{
		return $this->hasMany(CommentLike::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'parent_id');
	}
}
