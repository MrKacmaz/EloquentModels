<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'userId', 'title', 'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'postId', 'id');
    }
}
