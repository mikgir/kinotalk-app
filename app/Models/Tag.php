<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Models\Tag as ArticleTag;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Tag
 *
 * @property int                  $id
 * @property string               $name
 * @property string               $slug
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 *
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class Tag extends ArticleTag
{
    use Sluggable;

    protected $table = 'tags';

    protected $fillable = [
        'name',
        'slug'
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
