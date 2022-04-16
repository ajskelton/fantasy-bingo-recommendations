<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookSquareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'square_id' => $this->faker->numberBetween(1,25),
            'book_id' => $this->faker->randomNumber(),
            'hard_mode' => $this->faker->boolean(),
        ];
    }
}
