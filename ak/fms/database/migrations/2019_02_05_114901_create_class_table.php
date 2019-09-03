<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('parent_id');
            $table->string('name',200);
            $table->string('email', 100)->unique();
            $table->string('address',250);
            $table->string('country',50);
            $table->string('city',50);
            $table->string('bank_account_detail',200);
            $table->string('fms_score',200);
            $table->string('write_up',250);
            $table->string('timing',500);
            $table->string('price',25);
            $table->integer('total_seat');
            $table->integer('seat_enrolled');
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
        Schema::dropIfExists('class');
    }
}
