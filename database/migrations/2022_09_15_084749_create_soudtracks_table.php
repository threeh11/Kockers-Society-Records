<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('soudtracks', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->integer('№');
            $table->string('title');
            $table->string('artist');
            $table->date('releaseDate');
            $table->string('genre');
            $table->foreignId('album_id')->constrained('albums');
            $table->string('pathToSoundtrack');
        });
    }

    public function down()
    {
        Schema::dropIfExists('music');
    }
};
