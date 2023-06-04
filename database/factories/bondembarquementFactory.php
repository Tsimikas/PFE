<?php

namespace Database\Factories;
use App\Models\Marin;
use App\Models\User;
use App\Models\Port;
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
                'wilaya_embarquement'=> $this->faker->lastName(),
                'date_embarquement'=> $this->faker->date(),
                'numero' => $this->faker->numberBetween(1,100),
                'marin_id'=> Marin::factory(),
                'user_id'=> User::factory(),
                'port_id'=> Port::factory(),

        ];
    }
}
