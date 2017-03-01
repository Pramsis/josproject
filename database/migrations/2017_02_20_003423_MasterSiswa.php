<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master-siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->integer('nisn')->unique();
            $table->string('nama' , '25');
            $table->string('username' , '25');
            $table->string('password' , '60');
            $table->string('jen_kel' , '25');
            $table->string('kelas' , '25');
            $table->string('tanggal_lahir' , '25');
            $table->string('alamat' , '50');
            $table->string('telepon' , '25');
            $table->string('agama' , '25');
            $table->string('level' , '25');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('master-siswa');
    }
}
