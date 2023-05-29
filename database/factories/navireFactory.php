<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class navireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=> $this->faker->name(),
            'numero_de_role'=> $this->faker->numberBetween(1,10),
            'nombre_equipage'=> $this->faker->numberBetween(1,10),
            
        ];
    }
}
