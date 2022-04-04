<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user1 = \App\Models\User::create([
            'name' => 'jj',
            'email' => 'jj@jon.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        $user2 = \App\Models\User::create([
            'name' => 'kk',
            'email' => 'kk@jon.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        Post::create([
            'user_id' => $user1->id,
            'content' => 'lorem '
        ]);
        Post::create([
            'user_id' => $user2->id,
            'content' => 'ipsum '
        ]);
    }
}
