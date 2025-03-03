<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = str_replace(' ', '-', $post->title);
        });
    }

    public function scopeActive(Builder $query)
    {
        return $query->where('active', true);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getTotalCommentAttribute(): int
    {
        return $this->comments()->count();
    }
}
