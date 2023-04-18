<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleLike
 * 
 * @property int $user_id
 * @property int $article_id
 * @property int $like_type_id
 * 
 * @property Article $article
 * @property LikeType $like_type
 * @property User $user
 *
 * @package App\Models
 */
class ArticleLike extends Model
{
	protected $table = 'article_likes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'article_id' => 'int',
		'like_type_id' => 'int'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}

	public function like_type()
	{
		return $this->belongsTo(LikeType::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
