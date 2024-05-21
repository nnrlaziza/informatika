<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
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
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'photo' => 'https://source.unsplash.com/random',
            'type' => $this->faker->randomElement(['kelas', 'laboratorium']),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
