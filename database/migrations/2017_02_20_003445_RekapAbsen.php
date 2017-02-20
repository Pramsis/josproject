<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RekapAbsen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_absen', function (Blueprint $table) {
          $table->increments('id_rekapabsen');
          $table->integer('id_absen')->unsigned();
          $table->integer('id_siswa')->unsigned();
          $table->integer('id_kelas')->unsigned();
          $table->string('semester', '25');
          $table->string('kelas', '25');
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
        Schema::drop('rekap_absen');
    }
}
