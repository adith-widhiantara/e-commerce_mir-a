<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
  protected $fillable=[
    'photo',
    'bank',
    'norek',
    'nama',
  ];
}
