<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdata', function (Blueprint $table) {
            $table->id();
            $table->string('surname')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->date('bday')->nullable();

            $table->text('characteristic')->nullable();

            $table->string('website')->nullable();

            $table->string('portfolio')->nullable();
            $table->string('portfolio_image')->nullable();
            $table->string('portfolio_link')->nullable();

            $table->timestamps();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_userdata');
    }
}
