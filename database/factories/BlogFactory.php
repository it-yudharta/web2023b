<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(4, true),
            'author' => fake()->name,
            'content' => fake()->paragraphs(5, true),
            'time_to_read' => fake()->numberBetween(3, 15),
            'for_kid' => fake()->boolean,
        ];
    }
}
