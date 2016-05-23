<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',25);
            $table->string('last_name',25);
            $table->string('email')->unique();
            $table->string('address', 50);
            $table->string('phone_number', 15);
            $table->string('zip_code', 6);
            $table->date('dob');
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('owners');
    }
}
