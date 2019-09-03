<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
             $table->string('email', 100)->unique();
             $table->string('password',100);
             $table->string('remember_token',200);
             $table->integer('phone_number');
             $table->string('address',200);
             $table->string('photo',200);
             $table->string('dob',200);
             $table->string('facebook_id',200);
             $table->string('id_card_number',100);
             $table->string('id_card_image',250);
             $table->string('spouse',200);
             $table->string('family',200);
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
        Schema::dropIfExists('customer');
    }
}
