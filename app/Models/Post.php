<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'body',
        'published_at',
        'category_id',
        'slug',
        'cover'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
