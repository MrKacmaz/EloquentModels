<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Illuminate\Support\Facades\File;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     // JSON dosyasının içeriğini oku
     $json = File::get(public_path('comments.json'));

     // JSON içeriğini diziye dönüştür
     $comments = json_decode($json, true);

     foreach ($comments as $comment) {
        Comment::query()->insert([
             'id' => $comment['id'],
             'postId' => $comment['postId'],
             'name' => $comment['name'],
             'email' => $comment['email'],
             'body' => $comment['body'],
         ]);
     }
    }
}
