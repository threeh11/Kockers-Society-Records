<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->string('photographer');
            $table->string('area');
            $table->string('city');
            $table->date('date');
            $table->string('pathToPhoto');
        });
    }

    public function down()
    {
        Schema::dropIfExists('photos');
    }
};
