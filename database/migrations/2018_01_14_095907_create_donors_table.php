<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donorId')->unsigned();
            $table->foreign('donorId')->references('id')->on('users');
            $table->string('donorEmail');
            $table->foreign('donorEmail')->references('email')->on('users');
            $table->string('bloodGroup');
            $table->string('fullName');
            $table->string('gender');
            $table->integer('age');
            $table->string('weight');
            $table->string('phoneNumber');
            $table->mediumText('address');
            $table->string('upazila');
            $table->string('city');
            $table->string('status');
            $table->dateTime('donatingDate');
            $table->timestamps();
            $table->string('bloodUnit');
            $table->string('bloodUnitSection');
            $table->string('bloodUnitCity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
