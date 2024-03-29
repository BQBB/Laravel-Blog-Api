<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ["title","img","body","user_id","slug"];

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, "commentable");
    }
}
