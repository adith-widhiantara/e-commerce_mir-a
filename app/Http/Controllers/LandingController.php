<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\Product;

class LandingController extends Controller
{
  public function index()
  {
    $categories = Categories::all();
    $product = Product::where('status', 1)->get();
    $newProduct = Product::orderBy('id', 'desc')->take(6)->get();
    $soldProduct = Product::orderBy('sold', 'desc')->take(6)->get();
    $priceProduct = Product::orderBy('price', 'asc')->take(6)->get();

    return view('page.landing.index', compact(
      'categories',
      'product',
      'newProduct',
      'soldProduct',
      'priceProduct',
    ));
  }
}
