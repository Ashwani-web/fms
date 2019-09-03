<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FurtherSubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('further_sub_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_cat_id')->unsigned();
            $table->foreign('fk_cat_id')->references('id')->on('category');
            $table->integer('fk_sub_id')->unsigned();
            $table->foreign('fk_sub_id')->references('id')->on('sub_category');
            $table->string('name',200);
            $table->string('slug',200);
            $table->string('image',250);
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
        Schema::dropIfExists('further_sub_category');
    }
}
