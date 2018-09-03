<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('houses')){
            Schema::create('houses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name','100');
                $table->decimal('price', 8, 2);
                $table->integer('bedrooms')->unsigned();
                $table->integer('bathrooms')->unsigned();
                $table->integer('storeys')->unsigned();
                $table->integer('garages')->unsigned();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
