<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticlesMedia extends Model
{
    use HasFactory;

    protected $table = 'articles_media';

    protected $casts = [
        'article_id' => 'int'
    ];

    protected $fillable = [
        'article_id',
        'name',
        'path',
        'size',
        'type'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
