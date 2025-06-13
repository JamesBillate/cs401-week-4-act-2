<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'post_id');
    }
}
