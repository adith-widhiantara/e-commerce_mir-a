<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable=[
    'user_id',
    'status',
    'totalPrice',
    'buktiTransfer',
    'resi',
    'pengiriman',
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function product()
  {
    return $this->belongsToMany('App\product')->withPivot('quantity', 'subTotalPrice', 'id');
  }
}
