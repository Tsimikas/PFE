<?php

namespace Database\Factories;
use App\Models\Marin;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class bondembarquementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'date_debarquement'=> $this->faker->date(),
                'date_embarquement'=> $this->faker->date(),
                'marin_id'=> Marin::factory(),
                'user_id'=> User::factory(),

        ];
    }
}
