<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFrizersTable extends Migration
{
public function up()
{
    Schema::table('frizers', function (Blueprint $table) {
        $table->text('opis', 150)->nullable()->change();
    });
  
  
}




public function down()
{
    Schema::table('frizers', function (Blueprint $table) {
        $table->text('opis')->change();
    });
}

}