<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence(2),
            'content' => $this->faker->paragraph(5),
            'image' => 'https://picsum.photos/800',
            'date' => $this->faker->date(),
        ];
    }
}
