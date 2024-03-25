<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // JSON dosyasının içeriğini oku
        $json = File::get(public_path('users.json'));

        // JSON içeriğini diziye dönüştür
        $users = json_decode($json, true);

        foreach ($users as $user) {
            User::query()->insert([
                'id' => $user['id'],
                'name' => $user['name'],
                'username' => $user['username'],
                'email' => $user['email'],
                'address' => json_encode($user['address']),
                'phone' => $user['phone'],
                'website' => $user['website'],
                'company' => json_encode($user['company']),
            ]);
        }
    }
}
