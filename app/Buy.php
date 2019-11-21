<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
  protected $fillable = [
    'user_id', 'product_id', 'desain_id', 'ukuran'
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function product(){
    return $this->belongsTo(Product::class);
  }

  public function desain(){
    return $this->belongsTo(Desain::class);
  }

  public function color(){
    return $this->belongsTo(Color::class);
  }
}
