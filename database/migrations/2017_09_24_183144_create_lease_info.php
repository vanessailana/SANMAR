<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaseInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('lease_info', function (Blueprint $table) {
           
           $table->string('property');
           $table->string('lease_amount');
           $table->string('lease_expiration');
           $table->string('secruity_deposit');
           $table->string('last_month');
           $table->string('grace_period');
           $table->string('late_payment_fee');
           $table->string('next_rental_increase');
           $table->string('increase_amount');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lease_info');
    }
}
