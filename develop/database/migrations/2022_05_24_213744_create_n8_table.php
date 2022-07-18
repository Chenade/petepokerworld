<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateN8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n8', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category')->default(1);
            $table->string('title');
            $table->string('link');
            $table->string('image')->default('');
            $table->integer('ord')->default(1);
            $table->integer('del')->default(0);
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
        Schema::dropIfExists('n8');
    }
}
