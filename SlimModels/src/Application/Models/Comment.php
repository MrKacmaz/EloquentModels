<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'postId', 'name', 'email', 'body'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'postId', 'id');
    }
}
