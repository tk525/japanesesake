<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJapaneseSakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Owner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 10);
            $table->text('address');
            $table->text('email');
            $table->string('tel', 10);
            $table->text('discription');
            $table->string('password', 10);
            $table->string('zipcode', 10);
            $table->string('picture_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Owner');
    }
}
