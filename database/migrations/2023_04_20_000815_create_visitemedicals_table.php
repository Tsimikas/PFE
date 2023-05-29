<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitemedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitemedicals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marin_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->date('date_visite');
            $table->string('Duree', 50);
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
        Schema::dropIfExists('visitemedicals');
    }
}
