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

class CartController extends Controller
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
                  ->first();

      if ( $cart == null ) {
        return view('page.cart.index', compact('cart'));
      } else {
        $totalPricePivot = CartProduct::where('cart_id', $cart->id)
                                      ->sum('subTotalPrice');

        return view('page.cart.index', compact('cart', 'totalPricePivot'));
      }

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

    }

    public function storeCart(Request $request, $slug)
    {
      $product = product::where('slug', $slug)->first();
      $user = Auth::user();

      $cart = Cart::firstOrCreate(
        [
          'user_id' => $user->id,
          'status' => 0
        ],
        [

        ]
      );

      $cartproduct = CartProduct::updateOrCreate(
        [
          'cart_id' => $cart -> id,
          'product_id' => $product -> id,
        ],
        [
          'quantity' => $request -> quantity,
          'subTotalPrice' => $request -> quantity * $product -> price,
        ]
      );

      return redirect()->route('cart.index');
    }

    public function unggahBukti(Request $request, $id)
    {
      $request->validate([
        'input-file' => 'required|image',
      ]);
      
      $cart = Cart::where('id', $id)
                  ->first();

      foreach ($cart->product as $pro) {
        $quantity = $pro->pivot->quantity;
        $stock = $pro->stock;
        $sold = $pro->sold;
        $product = $pro->id;

        product::where('id', $product)
            ->update([
              'stock' => ($stock - $quantity),
              'sold' => ($sold + $quantity),
            ]);
      }

      $photo = $request->file('input-file');
      $namaPhoto = time().$photo->getClientOriginalName();
      $tujuan_upload = 'img/upload/buktiTransfer';
      $photo->move($tujuan_upload, $namaPhoto);

      Cart::where('id', $id)
          ->update([
            'status' => 3,
            'buktiTransfer' => $namaPhoto,
          ]);

      return redirect()->route('user.status');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      CartProduct::destroy($id);
      return redirect()->route('cart.index');
    }
}
