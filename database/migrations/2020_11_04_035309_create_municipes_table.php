<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMunicipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('bairro')->nullable();
            $table->string('telefone')->nullable();
            $table->string('rg')->nullable();
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
        Schema::dropIfExists('municipes');
    }
}
