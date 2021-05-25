<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('fullname', 100);
            $table->tinyInteger('years');
            $table->string('mailaddress', 50);
            $table->string('password', 50);
            $table->string('Street', 50);
            $table->string('location', 50);
            $table->string('city', 50);
            $table->string('condition', 50);
            $table->string('website', 50);
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
        Schema::dropIfExists('contacts');
    }
}
