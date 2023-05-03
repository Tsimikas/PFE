<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\marin;
use App\Models\familiarisation;
use App\Models\contrat;
use App\Models\bondembarquement;
use App\Models\bondebarquement;
use App\Models\equipage;
use App\Models\navire;
use App\Models\situation;
use App\Models\visitemedical;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        navire::truncate();
        User::factory()->create();
        marin::factory()->create();
        familiarisation::factory()->create();
        contrat::factory()->create();
        bondembarquement::factory()->create();
        bondebarquement::factory()->create();
        visitemedical::factory()->create();
        equipage::factory()->create();
        navire::create([

        'nom'=>'Tariq ibn Ziyad',
        'numero_de_role'=>'4838024',
        'nombre_equipage'=>'120'
        ]);

        navire::create([
            'nom'=>'El Djazair II',
            'numero_de_role'=>'7609221',
            'nombre_equipage'=>'120'
        ]);

        navire::create([
            'nom'=>'Tassili II',
            'numero_de_role'=>'2349372',
            'nombre_equipage'=>'120'
        ]);

        navire::create([
            'nom'=>'Badji Mokhtar 3',
            'numero_de_role'=>'9760015',
            'nombre_equipage'=>'180'
        ]);

        situation::factory()->create();





    }
}
