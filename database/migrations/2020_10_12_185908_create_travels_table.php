<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name_fr', 100);
            $table->string('name_en', 100);
            $table->string('description_fr', 255);
            $table->string('description_en', 255);
            $table->float('price');
            $table->date('date');
            $table->string('places', 255);
            $table->string('type', 100);
            $table->string('members', 30);


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
        Schema::dropIfExists('travels');
    }
}
