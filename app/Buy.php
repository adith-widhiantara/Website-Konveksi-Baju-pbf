<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
  protected $fillable = [
    'id_kain', 'nama_kain', 'gambar_kain', 'id_baju', 'nama_baju', 'gambar_baju', 'id_desain', 'nama_desain', 'gambar_desain', 'ukuran'
  ];
}
