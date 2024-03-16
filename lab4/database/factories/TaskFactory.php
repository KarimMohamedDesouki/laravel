<?php

namespace Database\Factories;

use APP\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'         => fake()->unique()->text('100'),
            'body'          => fake()->paragraph,
            'enabled'       => $this->faker->boolean,
            'published_at'  => fake()->dateTime,
            'user_id' => $this->faker->numberBetween(1, 10),
            
        ];
    }
}

            