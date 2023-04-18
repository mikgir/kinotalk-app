<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class Tag extends Model
{
	protected $table = 'tags';

	protected $fillable = [
		'name',
		'slug'
	];

	public function articles()
	{
		return $this->belongsToMany(Article::class, 'article_tags');
	}
}
