<?php

namespace Database\Factories;

use App\Models\Marin;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class fasiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'marin_id'=> Marin::factory(),
            'numero' => $this->faker->numberBetween(1,100),
            'date_expriration' => $this->faker->date(),
            'date_debut'=> $this->faker->date(),
        ];
    }
}
