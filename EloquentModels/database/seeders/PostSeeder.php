<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // JSON dosyasının içeriğini oku
        $json = File::get(public_path('posts.json'));

        // JSON içeriğini diziye dönüştür
        $posts = json_decode($json, true);

        foreach ($posts as $post) {
            Post::query()->insert([
                'userId' => $post['userId'],
                'id' => $post['id'],
                'title' => $post['title'],
                'body' => $post['body'],
            ]);
        }
    }
}
