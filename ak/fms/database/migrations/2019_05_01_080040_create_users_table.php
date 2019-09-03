<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('email', 100)->unique();
            $table->string('password',100);
            $table->string('remember_token',200);
            $table->integer('phone_number');
            $table->string('user_type',200);
            $table->string('address',200)->nullable()->default(null);
            $table->string('photo',200)->nullable()->default(null);
            $table->string('dob',200)->nullable()->default(null);
            $table->string('facebook_id',200)->nullable()->default(null);
            $table->string('id_card_number',100)->nullable()->default(null);
            $table->string('id_card_image',250)->nullable()->default(null);
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
        Schema::dropIfExists('users');
    }
}
