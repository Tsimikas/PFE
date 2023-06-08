<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marin;
use App\Models\Port;
use App\Models\User;

class bondebarquementFactory extends Factory
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
            'marin_id'=> Marin::factory(),
            'user_id'=> User::factory(),
            'port_id'=>Port::factory(),
        ];
    }
}
