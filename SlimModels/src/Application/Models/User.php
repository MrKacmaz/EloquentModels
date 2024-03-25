<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'username', 'email', 'address', 'phone', 'website', 'company'
    ];

    protected $casts = [
        'address' => 'array',
        'company' => 'array',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'userId', 'id');
    }
}
