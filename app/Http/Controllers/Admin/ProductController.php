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
      $allCategories = Categories::orderBy('id', 'asc')->get();
      return view('page.admin.product.add.index', compact('allCategories'));
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
        'categories'  => 'required',
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

      $product = product::create([
        'name' => $request -> name,
        'slug' => $slug,
        'desc' => $request -> desc,
        'stock' => $request -> stock,
        'price' => $request -> price,
        'weight' => $request -> weight,
        'status' => $status,
      ]);

      $product -> categories() -> attach($request -> categories);

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
        $namaPhoto = time() . $photo->getClientOriginalName();
        $namaPhoto2 = str_replace(' ', '', $namaPhoto);
        $namaPhotoSlug = preg_replace('/[^A-Za-z0-9\-.]/', '', $namaPhoto2);
        $tujuan_upload = 'img/upload/product';
        $photo->move($tujuan_upload, $namaPhotoSlug);

        ImageProduct::create([
          'product_id' => $product -> id,
          'name' => $namaPhotoSlug,
        ]);

        return back();
      }
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
      $slug = Str::slug($request -> name, '-');

      Product::where('id', $product -> id)
            ->update([
              'name' => $request -> name,
              'slug' => $slug,
              'desc' => $request -> desc,
              'stock' => $request -> stock,
              'price' => $request -> price,
              'weight' => $request -> weight,
              'status' => $status,
            ]);

      if (isset($request -> categories)) {
        $product -> categories() -> attach($request -> categories);
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
