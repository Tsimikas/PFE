<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marin;

class visitemedicalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_visite'=>$this->faker->date(),
            'duree'=>$this->faker->date(),
            'marin_id'=> Marin::factory(),
        ];
    }
    }
