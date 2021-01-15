<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Cart;

class StatusController extends Controller
{
  public function belumDikonfirmasi()
  {
    $cart = DB::table('carts')
              ->join('users', 'carts.user_id', '=', 'users.id')
              ->select(DB::raw('count(*) as jumlah, name'))
              ->where('status', '=', 1)
              ->groupBy('name')
              ->get();

    return view('page.admin.statusPemesanan.belumDikonfirmasi.index', compact('cart'));
  }
}
