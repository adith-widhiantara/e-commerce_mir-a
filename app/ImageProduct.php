<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
  protected $fillable=[
    'product_id',
    'name',
  ];

  public function product()
  {
    return $this->belongsTo('App\product');
  }
}
