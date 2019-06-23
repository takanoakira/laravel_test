<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('employees', function (Blueprint $table){
    $table->string('name', 50)->change();
    $table->integer('age')->after('name')->default(0);
  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employees', function (Blueprint $table) {
  $table->string('name', 32)->change();
  $table->dropColumn('age');
  });
    }
}
