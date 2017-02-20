<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Masterjurnal extends Model
{

    use SoftDeletes;

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
