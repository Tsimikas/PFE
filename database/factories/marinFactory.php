<?php

namespace Database\Factories;

use App\Models\equipage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class marinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom'=> $this->faker->name(),
            'Prenom' => $this->faker->name(),
            'Matricule' => $this->faker->unique()->regexify('[A-Z]{2}\d{4}[A-Z]{2}'),
            'Date_naissance' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'Numero_telephone' => $this->faker->phoneNumber(),
            'Post_travail' => $this->faker->sentence(),
            'wilaya_de_naissance'=> $this->faker->name(),
            'wilaya_de_domicile'=> $this->faker->name(),
            'adress'=> $this->faker->name(),
            'user_id'=> User::factory()

        ]
        ;
    }
}
