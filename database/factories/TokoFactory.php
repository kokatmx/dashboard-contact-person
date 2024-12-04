<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toko>
 */
class TokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'toko_code' => $this->faker->randomLetter() . $this->faker->randomNumber(3),
            'toko_name' => $this->faker->company(),
            'no_hp' => $this->faker->phoneNumber(),
            'position_id' => $this->faker->numberBetween(65, 67),
        ];
    }
}
