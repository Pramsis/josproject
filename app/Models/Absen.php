<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absen extends Model
{
    use SoftDeletes;

    public function Mastersiswa()
    {
        return $this->hasMany('App\Models\Mastersiswa', 'id_siswa');
    }

    protected $table = 'absen';
    protected $primaryKey = 'id_absen';
    protected $fillable = [
      'id_siswa',
      'kelas',
      'kedatangan',
      'status',

    ];

}
