<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marin;
use App\Models\User;

class situationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_debut'=>$this->faker->date(),
          
            'marin_id'=> Marin::factory(),
            'user_id'=> User::factory(),
        ];
    }
}
