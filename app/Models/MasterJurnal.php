<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masterjurnal extends Model
{
  protected $table = 'master-jurnal';
  protected $primaryKey = 'id_jurnal';
  protected $fillable = [
      'id_jurnal',
      'date',
      'kelas',
      'todo',
      'nama_guru',

  ];
}
