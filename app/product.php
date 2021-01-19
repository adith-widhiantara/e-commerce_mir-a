<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  protected $fillable = [
      'name',
      'slug',
      'desc',
      'stock',
      'price',
      'sold',
      'weight',
      'status',
  ];

  public function categories()
  {
    return $this->belongsToMany('App\Categories');
  }

  public function cart()
  {
    return $this->belongsToMany('App\Cart');
  }

  public function imageproduct()
  {
    return $this->hasMany('App\ImageProduct');
  }
}
