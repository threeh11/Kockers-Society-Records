<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->string('name');
            $table->foreignId('user_id')->constrained('users');
            $table->date('realeaseDate');
            $table->string('pathToCover');
        });
    }

    public function down()
    {
        Schema::dropIfExists('albums');
    }
};
