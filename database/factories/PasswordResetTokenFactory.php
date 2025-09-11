<?php

namespace Database\Factories;

use App\Models\PasswordResetToken;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PasswordResetToken>
 */
class PasswordResetTokenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'token' => fake()->unique()->randomLetter(),
            'created_at' => now(),
        ];
    }
}