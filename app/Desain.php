<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desain extends Model
{
  protected $fillable = [
    'nama','arti', 'file'
  ];

  public function buy()
  {
    return $this->hasMany(Buy::class);
  }
}
