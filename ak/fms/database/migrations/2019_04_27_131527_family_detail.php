<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FamilyDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_custmor_id')->unsigned();
            $table->foreign('fk_custmor_id')->references('id')->on('category');
            
            $table->enum('cust_type',['spuos','children']);
            $table->string('name',200);
            $table->string('photo',250);
            $table->string('dob',250);
            $table->unsignedTinyInteger('is_active')->default(1);
            $table->unsignedTinyInteger('is_delete')->default(1);
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
        Schema::dropIfExists('family_detail');
    }
}
