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
            'Nom' => $this->faker->name(),
        ];
    }
}
