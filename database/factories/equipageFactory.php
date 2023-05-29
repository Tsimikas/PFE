<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\navire;
use App\Models\Marin;
class equipageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'navire_id'=>navire::factory(),
            'marin_id'=>Marin::factory(),
            'date_debut_membre'=>$this->faker->date(),
            'date_fin_membre'=>$this->faker->date(),

        ];
    }
}
