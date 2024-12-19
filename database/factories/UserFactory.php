<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('1234567890'), // Default password
            'remember_token' => Str::random(10),
            'no_hp' => $this->faker->phoneNumber(),
            'email_verified_at' => now(),

            // Menggunakan nilai acak sesuai jumlah data yang ada
            'division_id' => $this->faker->numberBetween(1, 10),
            'department_id' => $this->faker->numberBetween(1, 15),
            'position_id' => $this->faker->numberBetween(1, 146),
            'area_id' => $this->faker->numberBetween(1, 3),
            'toko_id' => $this->faker->numberBetween(1, 100),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
