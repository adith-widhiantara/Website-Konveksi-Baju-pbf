<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  protected $fillable = [
    'Warna', 'Gambar'
  ];

  public function buy()
  {
    return $this->hasMany(Buy::class);
  }
}
