<?php

namespace Database\Factories;

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
        return [
            'title' => fake()->sentence(),
            'excerpt' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'user_id' => random_int(1, 3),
            // 'isPublic' => fake()->boolean(),
            'isPublic' => true,
            'expirable' => fake()->boolean(),
            'mentionable' => fake()->boolean(),
        ];
    }
}
