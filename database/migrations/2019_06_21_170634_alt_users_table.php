<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          // Schemaファサードで posts テーブルの作成
  Schema::create('posts', function (Blueprint $table) {

  // カラムを作成していく
  $table->increments('id');
  $table->string('post_body');
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
        //
          // テーブル削除（ロールバック）
        Schema::drop('posts');
    }
}
