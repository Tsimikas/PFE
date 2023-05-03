<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marin;
use App\Models\User;

class familiarisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_actuel'=> $this->faker->jobTitle(),
            'nouveau_post'=> $this->faker->jobTitle(),
            'cas_familiarisation'=> $this->faker->sentence(),
            'marin_id'=> Marin::factory(),
            'user_id'=> User::factory(),
        ];
    }
}
