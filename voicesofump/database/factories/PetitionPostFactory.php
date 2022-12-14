<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetitionPost>
 */
class PetitionPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph(30),
            'user_id' => User::factory(),
            'signature_goals' =>$this->faker->unique()->numberBetween(1, 500),
            
        ];
    }
}
