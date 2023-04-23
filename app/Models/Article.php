<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Cog\Contracts\Love\Reactable\Models\Reactable as ReactableInterface;
use Cog\Laravel\Love\Reactable\Models\Traits\Reactable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ShowArticleById
 *
 * @property int                      $id
 * @property int                      $user_id
 * @property int                      $news_category_id
 * @property string                   $title
 * @property string|null              $seo_title
 * @property string|null              $excerpt
 * @property string                   $body
 * @property string|null              $image
 * @property string                   $slug
 * @property string|null              $meta_description
 * @property string|null              $meta_keywords
 * @property string                   $status
 * @property bool                     $featured
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property string|null              $deleted_at
 *
 * @property NewsCategory             $news_category
 * @property User                     $user
 * @property Collection|ArticleLike[] $article_likes
 * @property Collection|Tag[]         $tags
 * @property Collection|Comment[]     $comments
 *
 * @package App\Models
 */
class Article extends Model implements ReactableInterface
{
    use Taggable;
    use Sluggable;
    use SoftDeletes;
    use Reactable;

    protected $table = 'articles';

    protected $casts = [
        'user_id' => 'int',
        'news_category_id' => 'int',
        'featured' => 'bool'
    ];

    protected $fillable = [
        'user_id',
        'news_category_id',
        'title',
        'seo_title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keywords',
        'status',
        'featured'
    ];

    public function news_category(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

//	public function article_likes(): HasMany
//    {
//		return $this->hasMany(ArticleLike::class);
//	}


    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
