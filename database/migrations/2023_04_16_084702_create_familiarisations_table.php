<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliarisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiarisations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marin_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('post_actuel');
            $table->string('nouveau_post');
            $table->string('cas_familiarisation');
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
        Schema::dropIfExists('familiarisations');
    }
}
