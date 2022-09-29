<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 500);
            $table->string('responsavel', 200);
            $table->string('local', 250);
            $table->string('banner', 250);
            $table->string('descricao', 1000);
            $table->integer('status')->default(0);
            $table->dateTime('data');
            $table->string('url', 1000)->nullable();

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
        Schema::dropIfExists('eventos');
    }
}
