<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GovernmentSubsidies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('government_subsidies', function (Blueprint $table) {
    
    $table->string('property');
     $table->string('unit number');
    $table->string('tenant_name');
    $table->string('lease_amount');
    $table->string('section8/brillant_corner');
    $table->string('tenant_pays');
    $table->string('lease_expiration');
    $table->string('security_deposit');
    $table->string('last_month');
    $table->string('grace_period');
    $table->string('late_payment fee');
    $table->string('comments');
    $table->string('tenant_phone_number');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('government_subsidies');
    }
}
