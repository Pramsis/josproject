<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master-kelas', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->integer('nip')->unique();
            $table->string('nama' , '25');
            $table->string('password' , '25');
            $table->string('jen_kel' , '25');
            $table->string('type_guru' , '25');
            $table->string('mapel' , '25');
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
        Schema::drop('master-kelas');
    }
}
