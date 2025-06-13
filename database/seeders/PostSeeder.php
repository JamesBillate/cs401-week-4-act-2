<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();

        if ($user->count() === 0)
        {
            echo 'No users found, please run UserSeeder.';
            return;
        };

        Post::factory(10)->create([
            'user_id' => $user->random()->id,
        ]);

        $categories = Category::all();
        $posts = Post::all();

        foreach ($posts as $post){
            $randomCats = $categories->random(rand(1, 3));
            $post->categories()->attach($randomCats); 
        }
    }
}
