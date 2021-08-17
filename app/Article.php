<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    // protected $fillable = ['name', 'title', 'content', 'image'];
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_id', 'id');
    }
}
