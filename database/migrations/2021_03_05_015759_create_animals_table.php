<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('animal', 100);
            $table->integer('age');
            $table->string('birthplace', 50);
            $table->string('climate', 50);
            $table->string('color', 50);
            $table->string('fur', 50);
            $table->string('food', 50);
            $table->string('comemmtanim')->nullable();
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
        Schema::dropIfExists('animals');
    }
}
