<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tenant_info', function (Blueprint $table) {
            $table->string('tenant_name');
            $table->string('tenant_lastname');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('currentlyat')->unique();
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