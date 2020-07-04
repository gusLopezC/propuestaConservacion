<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidasManiobrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas_maniobras', function (Blueprint $table) {
            $table->id();
            $table->string('tramos');
            $table->string('metros');
            $table->unsignedBigInteger('maniobra_id')->unsigned();
            $table->timestamps();
            $table->foreign('maniobra_id')->references('id')->on('manobrias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medidas_maniobras');
    }
}
