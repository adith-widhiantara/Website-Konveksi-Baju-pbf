<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
  protected $fillable = [
      'role', 'email', 'password', 'Nama', 'tanggallahir', 'nomorhp', 'Alamat'
  ];
}
