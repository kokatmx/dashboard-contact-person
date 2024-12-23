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
            'nik' => $this->generateNik(),
            'password' => Hash::make('1234567890'), // Default password
            'remember_token' => Str::random(10),
            'no_hp' => $this->faker->phoneNumber(),
            'nik_verified_at' => now(),

            // Menggunakan nilai acak sesuai jumlah data yang ada
            'division_id' => $this->faker->numberBetween(1, 10),
            'department_id' => $this->faker->numberBetween(1, 15),
            'position_id' => $this->faker->numberBetween(1, 146),
            'area_id' => $this->faker->numberBetween(1, 3),
            'toko_id' => $this->faker->numberBetween(1, 100),

        ];
    }

    /**
     * Indicate that the model's nik address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'nik_verified_at' => null,
        ]);
    }

    protected function generateNik()
    {
        // 6 digit kode wilayah (random)
        $kodeWilayah = $this->faker->numberBetween(110101, 940110);

        // Tanggal lahir dalam format YYMMDD
        $tanggalLahir = $this->faker->dateTimeBetween('-60 years', '-18 years')->format('ymd');

        // Jenis kelamin: tambahkan 40 ke tanggal jika perempuan
        $isFemale = $this->faker->boolean;
        if ($isFemale) {
            $tanggalLahir = (int) substr($tanggalLahir, 4, 2) + 40 . substr($tanggalLahir, 0, 4);
        }

        // 4 digit nomor urut registrasi
        $noUrut = $this->faker->numberBetween(1000, 9999);

        return $kodeWilayah . $tanggalLahir . $noUrut;
    }
}
