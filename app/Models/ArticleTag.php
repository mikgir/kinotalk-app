<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleTag
 * 
 * @property int $article_id
 * @property int $tag_id
 * 
 * @property Article $article
 * @property Tag $tag
 *
 * @package App\Models
 */
class ArticleTag extends Model
{
	protected $table = 'article_tags';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'article_id' => 'int',
		'tag_id' => 'int'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}

	public function tag()
	{
		return $this->belongsTo(Tag::class);
	}
}
