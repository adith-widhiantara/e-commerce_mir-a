<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable=[
    'name',
    'slug',
    'color',
  ];

  public function product()
  {
    return $this->belongsToMany('App\product');
  }
}
