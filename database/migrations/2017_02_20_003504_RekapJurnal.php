<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RekapJurnal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_jurnal', function (Blueprint $table) {
          $table->increments('id_rekapjurnal');
          $table->integer('id_jurnal')->unsigned();
          $table->integer('id_guru')->unsigned();
          $table->string('semester', '25');
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
        Schema::drop('rekap_jurnal');
    }
}
