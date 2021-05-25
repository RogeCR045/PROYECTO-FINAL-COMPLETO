<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('songname', 100);
            $table->string('artist', 200);
            $table->string('gender', 50);
            $table->integer('yearlaunch');
            $table->string('album', 100);
            $table->string('socialmedia', 100);
            $table->tinyInteger('timelistening');
            $table->text('letter');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('music');
    }
}
