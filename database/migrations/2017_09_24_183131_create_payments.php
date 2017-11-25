<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
             $table->string('company');
             $table->string('property')->nullable(false);
             $table->integer('rents_to_collect');
             $table->string('January');
             $table->string('February');
             $table->string('March');
             $table->string('April');
             $table->string('May');
             $table->string('June');
             $table->string('July');
             $table->string('August');
             $table->string('September');
             $table->string('October');
             $table->string('November');
             $table->string('December');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
