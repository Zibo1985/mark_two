<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kunden>
 */
class KundenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rfirma' => fake()->company(),
            'ranrede' => fake()->randomElement(['Herr','Frau']),
            'rvorname' => fake()->name(),
            'rname' => fake()->lastName(),
            'rstrasse' => fake()->streetName(),
            'rplz' => fake()->postcode(),
            'rort' => fake()->city(),
            'remail' => fake()->unique()->email(),
            'rtelefon'=> fake()->phoneNumber(),
        ];
    }
}
