<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marins', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Matricule')->unique();
            $table->date('Date_Naissance');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Post_travail');
            $table->string('Numero_telephone', 50);
            $table->string('adress');
            $table->string('wilaya_de_naissance');
            $table->string('wilaya_de_domicile');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marins');
    }
}
