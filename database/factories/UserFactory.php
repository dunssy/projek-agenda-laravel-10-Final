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
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nip' => $this->faker->numberBetween(10000000, 99999999),
            'kelamin' => $this->faker->randomElement(['pria','wanita']),
            'alamat' => $this->faker->text(200),
            'telp' => $this->faker->regexify('[0-9]{10,15}'),
            'username' => $this->faker->userName(),
            'password' => Hash::make('password'), // Password default
            'tempat' => $this->faker->city(),
            'tgl' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['islam','kristen','katolik','hindu','budha','konghucu']),
            'email' => $this->faker->unique()->safeEmail(),
            'foto' => $this->faker->imageUrl(),
            'level' => $this->faker->randomElement(['admin','guru']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
