<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'),
            'post_id' => Post::inRandomOrder()->value('id'),
            'reviewer_name' => User::inRandomOrder()->value('name'),
            'comment_context' => fake()->paragraph(),
            'reviewer_email' => User::inRandomOrder()->value('email')
        ];
    }
}
