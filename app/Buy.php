<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
  protected $fillable = [
    'user_id', 'product_id', 'id_baju', 'id_desain', 'ukuran'
  ];

  public function buy(){
    return $this->belongsTo(User::class);
  }
}
