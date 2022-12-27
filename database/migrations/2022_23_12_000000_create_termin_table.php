<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminTable extends Migration
{
   
    public function up()
    {
        Schema::create('termin', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->time('vreme');
            $table->foreignId('users_id')->default(0);
            $table->foreignId('frizer_id')->default(0);
                $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('termin');
    }
}
