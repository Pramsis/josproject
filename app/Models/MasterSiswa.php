<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mastersiswa extends Authenticatable
{


  use Notifiable;

  protected $table = 'master-siswa';
  protected $primaryKey = 'id_siswa';
  protected $fillable = [
      'id_siswa',
      'nisn',
      'nama',
      'jen_kel',
      'kelas',
      'tanggal_lahir',
      'alamat',
      'telepon',
      'agama',
      'level'

  ];

  public function Absen()
  {
        return $this->hasOne('App\Models\Absen','id_siswa', 'id_siswa');
  }
}
