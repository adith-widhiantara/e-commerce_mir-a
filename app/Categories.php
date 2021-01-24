<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable=[
    'name',
    'slug',
    'photo',
    'color',
  ];

  public function product()
  {
    return $this->belongsToMany('App\product');
  }
}
