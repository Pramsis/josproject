<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Masterguru;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Masterguru = new Masterguru;
        $Masterguru->nip = '25055';
        $Masterguru->nama = 'AP';
        $Masterguru->username = 'Admin';
        $Masterguru->password = bcrypt('123456');
        $Masterguru->jen_kel = 'Pria';
        $Masterguru->type_guru = 'Staff IT';
        $Masterguru->mapel = ' - ';
        $Masterguru->level = 'Admin';
        $Masterguru->save();
    }
}
