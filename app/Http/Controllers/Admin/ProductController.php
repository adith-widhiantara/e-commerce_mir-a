<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\product;
use App\Categories;
use App\ImageProduct;
use App\CategoriesProduct;

use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = product::orderBy('id', 'desc')->get();
      $lowStockProduct = product::where('stock', '<', 1)->get();
      return view('page.admin.product.landing.index', compact('product', 'lowStockProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('page.admin.product.add.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name'  => 'required',
        'desc'  => 'required',
        'stock'  => 'required|numeric',
        'price'  => 'required|numeric',
        'weight'  => 'required|numeric',
      ]);

      $slug = Str::slug($request -> name, '-');

      if ( $request -> status == null ) {
        $status = 0;
      } else {
        $status = 1;
      }

      product::create([
        'name' => $request -> name,
        'slug' => $slug,
        'desc' => $request -> desc,
        'stock' => $request -> stock,
        'price' => $request -> price,
        'weight' => $request -> weight,
        'status' => $status,
      ]);

      return redirect()->route('product.image.show', $slug);
    }

    public function createImage($slug)
    {
      $product = product::where('slug', $slug)->firstOrFail();
      return view('page.admin.product.add.image.index', compact('product'));
    }

    public function storeImage(Request $request, $slug)
    {
      $product = Product::where('slug', $slug)->first();

      if ( $product -> imageproduct -> count() > 4 ) {
        return back();
      } else {
        $request -> validate([
          'image' => 'required|image',
        ]);

        $photo = $request->file('image');
        $namaPhoto = time() . "-" . $photo->getClientOriginalName();
        $tujuan_upload = 'img/upload/product';
        $photo->move($tujuan_upload, $namaPhoto);

        ImageProduct::create([
          'product_id' => $product -> id,
          'name' => $namaPhoto,
        ]);

        return back();
      }
    }

    public function createCategories($slug)
    {
      $product = product::where('slug', $slug)->firstOrFail();
      $allCategories = Categories::orderBy('id', 'asc')->get();
      $procat = $product->categories;
      $wto = $allCategories->diff($procat);

      return view('page.admin.product.add.categories.index', compact('product', 'wto'));
    }

    public function storeCategories(Request $request, $slug)
    {
      $request->validate([
        'categories' => 'required',
      ]);

      if ( $request-> categories == "...") {
        return back();
      }

      $product = product::where('slug', $slug)->first();

      DB::table('categories_product')->insert([
        'product_id' => $product -> id,
        'Categories_id' => $request -> categories,
      ]);

      return redirect()->route('product.categories.show', $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $product = product::where('slug', $slug)->firstOrFail();
      $allCategories = Categories::orderBy('id', 'asc')->get();

      $procat = $product->categories;
      $wto = $allCategories->diff($procat);
      return view('page.admin.product.show.index', compact('product', 'allCategories', 'wto'));
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
    public function update(Request $request, $slug)
    {
      $request->validate([
        'name'  => 'required',
        'desc'  => 'required',
        'stock'  => 'required|numeric',
        'price'  => 'required|numeric',
        'weight'  => 'required|numeric',
      ]);

      if (empty($request->status)) {
        $status = 0;
      } else {
        $status = 1;
      }

      $product = Product::where('slug', $slug)->firstOrFail();

      Product::where('id', $product -> id)
            ->update([
              'name' => $request -> name,
              'desc' => $request -> desc,
              'stock' => $request -> stock,
              'price' => $request -> price,
              'weight' => $request -> weight,
              'status' => $status,
            ]);

      if (isset($request -> categories)) {
        DB::table('categories_product')->insert([
          'product_id' => $product -> id,
          'Categories_id' => $request -> categories,
        ]);
      }

      return redirect()->route('product.show', $slug);
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

    public function destroyImage($id)
    {

      $imageproduct = ImageProduct::where('id', $id)->first();
      File::delete('img/upload/product/'.$imageproduct -> name);

      ImageProduct::destroy($id);

      return back();
    }

    public function destroyCategories($cat, $product)
    {
      $destroyCategories = CategoriesProduct::where('product_id', $product)
                                            ->where('Categories_id', $cat)
                                            ->first();

      CategoriesProduct::destroy($destroyCategories->id);

      return back();
    }
}
