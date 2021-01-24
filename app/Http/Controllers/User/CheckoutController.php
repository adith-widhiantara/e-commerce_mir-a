<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Biodata;
use App\Categories;
use App\product;
use App\Cart;
use App\CartProduct;
use App\Bank;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cart = Cart::where('user_id', Auth::id())
                  ->where('status', '=', 0)
                  ->firstOrFail();
      $user = Auth::user();
      $totalPricePivot = CartProduct::where('cart_id', $cart->id)
                                    ->sum('subTotalPrice');

      return view('page.checkout.index', compact('cart', 'totalPricePivot', 'user'));
    }

    public function dropboxPayment($id)
    {
      $cart = Cart::where('user_id', Auth::id())
                  ->where('status', '=', 2)
                  ->where('id', $id)
                  ->firstOrFail();
      $user = Auth::user();
      $totalPricePivot = DB::table('cart_product')
                            ->where('cart_id', '=', $cart -> id)
                            ->sum('subTotalPrice');
      $bank = Bank::all();

      $totalProductOngkir = $user -> ongkir + $totalPricePivot;

      return view('page.checkout.payment.index', compact('cart', 'totalPricePivot', 'user', 'totalProductOngkir', 'bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function sendUser(Request $request, $id)
    {
      $request->validate([
        'alamat' => 'required',
        'kota' => 'required',
        'kodePos' => 'required',
        'nomorTelepon' => 'required|numeric',
      ]);

      $user = User::where('id', $id)
                  ->firstOrFail();
      $cart = Cart::where('user_id', $id)
                  ->where('status', 0)
                  ->firstOrFail();

      if ( $request->alamat == $user->alamat && $request->kota == $user->kota && $request->kodePos == $user->kodePos ) {
        $totalPricePivot = DB::table('cart_product')
                              ->where('cart_id', '=', $cart -> id)
                              ->sum('subTotalPrice');

        Cart::where('id', $cart->id)
            ->update([
              'status' => 2,
              'totalPrice' => $totalPricePivot + $user -> ongkir,
            ]);

        return redirect()->route('user.status');
      } else {
        User::where('id', $user->id)
            ->update([
              'alamat' => $request -> alamat,
              'kota' => $request -> kota,
              'kodePos' => $request -> kodePos,
              'nomorTelepon' => $request -> nomorTelepon,
            ]);

        Cart::where('id', $cart->id)
            ->update([
              'status' => 1,
            ]);

        return redirect()->route('user.status');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
