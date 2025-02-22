<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tahunajaran>
 */
class TahunajaranFactory extends Factory
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
            'ajaran'=>$this->faker->randomElement(['01-01-2001','01-01-2002','01-01-2003','01-01-2004']),
             'status'=>$this->faker->randomElement(['0','1'])
        ];
    }
}
