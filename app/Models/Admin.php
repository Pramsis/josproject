<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
  use Notifiable;

    protected $table = 'Admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'id_admin',
        'nama',
        'alamat',
        'telepon',
    ];


}