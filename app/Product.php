<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'jeniskain','stock', 'keterangan', 'file'
    ];

    public function buy()
    {
      return $this->hasMany(Buy::class);
    }
}
