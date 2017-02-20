<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masterguru extends Authenticatable
{
  use Notifiable;

    protected $table = 'master-guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        'id_guru',
        'nip',
        'jen_kel',
        'type_guru',
        'mapel',
        'level'
    ];


}
