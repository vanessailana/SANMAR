<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenant_name');
            $table->string('tenant_lastname');
             $table->string('email');
             $table->string('phone_number');
             $table->string('currentlyat');
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
        Schema::dropIfExists('tenant_info');
    }
}
