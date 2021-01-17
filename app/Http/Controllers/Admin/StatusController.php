<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\User;
use App\Cart;

class StatusController extends Controller
{
  public function belumDikonfirmasi()
  {
    $cart = DB::table('carts')
              ->join('users', 'carts.user_id', '=', 'users.id')
              ->select('users.id', DB::raw('count(*) as jumlah, name'))
              ->where('status', '=', 1)
              ->where('ongkir', '=', null)
              ->groupBy('name', 'id')
              ->get();

    return view('page.admin.statusPemesanan.index', compact('cart'));
  }

  public function belumDibayar()
  {
    $cart = DB::table('carts')
              ->join('users', 'carts.user_id', '=', 'users.id')
              ->select('users.id', DB::raw('count(*) as jumlah, name'))
              ->where('status', '=', 2)
              ->groupBy('name', 'id')
              ->get();

    return view('page.admin.statusPemesanan.index', compact('cart'));
  }

  public function belumDibayarUser($id)
  {
    $user = User::where('id', $id)->firstOrFail();

    $cart = Cart::where('user_id', $id)
                ->where('status', '=', 2)
                ->get();

    return view('page.admin.statusPemesanan.belumDibayar.show.index', compact('cart', 'user'));
  }

  public function belumDikemas()
  {
    $cart = DB::table('carts')
              ->join('users', 'carts.user_id', '=', 'users.id')
              ->select('users.id', DB::raw('count(*) as jumlah, name'))
              ->where('status', '=', 3)
              ->groupBy('name', 'id')
              ->get();

    return view('page.admin.statusPemesanan.index', compact('cart'));
  }

  public function belumDikemasUser($id)
  {
    $user = User::where('id', $id)->firstOrFail();

    $cart = Cart::where('user_id', $id)
                ->where('status', '=', 3)
                ->get();

    return view('page.admin.statusPemesanan.belumDikemas.show.index', compact('cart', 'user'));
  }

  public function sedangDikirim()
  {
    $cart = Cart::where('status', 4)->get();

    return view('page.admin.statusPemesanan.index', compact('cart'));
  }

  public function sedangDikirimUser($id)
  {
    $cart = Cart::where('id', $id)->firstOrFail();
    $user = $cart -> user;

    return view('page.admin.statusPemesanan.sedangDikirim.show.index', compact('cart', 'user'));
  }

  public function selesai()
  {
    $cart = Cart::where('status', 5)->get();

    return view('page.admin.statusPemesanan.index', compact('cart'));
  }

  public function selesaiUser($id)
  {
    $cart = Cart::where('id', $id)->firstOrFail();
    $user = $cart -> user;

    return view('page.admin.statusPemesanan.selesai.show.index', compact('user', 'cart'));
  }

  public function dibatalkan()
  {
    $cart = Cart::where('status', 6)->get();

    return view('page.admin.statusPemesanan.index', compact('cart'));
  }

  public function dibatalkanUser($id)
  {
    $cart = Cart::where('id', $id)->firstOrFail();
    $user = $cart -> user;

    return view('page.admin.statusPemesanan.dibatalkan.show.index', compact('user', 'cart'));
  }
}
