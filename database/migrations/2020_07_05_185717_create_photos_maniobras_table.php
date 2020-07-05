<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosManiobrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_maniobras', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
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
        Schema::dropIfExists('photos_maniobras');
    }
}
