<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $images = ['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg'];
        return [
            'description' => fake()->sentence(),
            'slug' => fake()->regexify('[A-Za-z0-9]{10}'),
            'user_id' => User::factory(),
            'image' => 'storage/posts/' . fake()->randomElement($images),
        ];
    }
}
