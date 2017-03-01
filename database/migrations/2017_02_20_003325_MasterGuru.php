<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master-guru', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->integer('nip')->unique();
            $table->string('nama' , '25');
            $table->string('username' , '25');
            $table->string('password' , '60');
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
        Schema::drop('master-guru');
    }
}
