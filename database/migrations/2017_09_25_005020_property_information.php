<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PropertyInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('property_information', function (Blueprint $table) {
    $table->string('property');
    $table->string('unit');
    $table->string('unit_type');
    $table->string('SF');
    $table->string('Currentrent');
    $table->string('lease_starts');
    $table->string('lease_termination');
    $table->string('increases');
    $table->string('expenses');
    $table->string('remarks');


    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_information');
    }
}
