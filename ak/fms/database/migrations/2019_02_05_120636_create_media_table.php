<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
             
            // $table->integer('fk_key_id')->unsigned();
            // $table->foreign('fk_key_id')->references('id')->on(('class'),('class_provider'),('customer'));
            // $table->foreign('fk_key_id')->references('id')->on('class_provider');
            // $table->foreign('fk_key_id')->references('id')->on('customer');
            // $table->foreign('fk_key_id')->references('id')->on('class');
            $table->integer('c_id')->unsigned();
            $table->string('image',200);
            $table->string('file_url',250);
            $table->enum('type', ['VIDEO', 'IMAGE']);
            $table->string('primary',200);
            $table->string('is_thumb',250);
            $table->enum('user_type', ['CLASS_PROVIDER', 'CLASS','SUB_CLASS']);
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
        Schema::dropIfExists('media');
    }
}
