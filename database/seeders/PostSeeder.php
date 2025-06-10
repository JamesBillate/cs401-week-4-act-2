<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();

        if ($user->count() == 0)
        {
            echo 'No users found, please run UserSeeder.';
            return;
        };

        Post::factory(20)->create([
            'user_id' => $user->random()->id,
        ]);
    }
}
