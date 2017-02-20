<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absen extends Model
{
    use SoftDeletes;

  protected $table = 'absen';
  protected $primaryKey = 'id_absen';
  protected $fillable = [
      'id_siswa',
      'status',

  ];

}
