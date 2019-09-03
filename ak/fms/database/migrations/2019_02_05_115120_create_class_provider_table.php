<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_provider', function (Blueprint $table) {
            $table->increments('id');
             $table->bigInteger('lat')->nullable()->default(null);
            $table->bigInteger('lng')->nullable()->default(null);
            $table->string('name',200);
            $table->string('email', 100)->unique();
            $table->string('phone_number',200);
            $table->string('password',20);
            $table->string('remember_token',200)->nullable()->default(null);
            $table->string('otp',10)->nullable()->default(null);
            $table->string('location',100)->nullable()->default(null);
            $table->string('state',50)->nullable()->default(null);
            $table->string('city',50)->nullable()->default(null);
            $table->string('address',200)->nullable()->default(null);
            $table->string('write_up',200)->nullable()->default(null);
            $table->string('fms_score',200)->nullable()->default(null);
            $table->string('account_name',200)->nullable()->default(null);
            $table->bigInteger('bank_account_no')->nullable()->default(null);
            $table->string('account_type',200)->nullable()->default(null);
            $table->string('bank_name',200)->nullable()->default(null);
            $table->string('branch_name',200)->nullable()->default(null);
            $table->string('ifsc_code',200)->nullable()->default(null);
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
        Schema::dropIfExists('class_provider');
    }
}
