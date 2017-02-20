<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterJurnal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('master-jurnal', function (Blueprint $table) {
            $table->increments('id_jurnal');
            $table->string('date', '50');
            $table->string('kelas' , '25');
            $table->string('todo' , '25');
            $table->string('nama_guru' , '25');
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
        schema::drop('master-jurnal');
    }
}
