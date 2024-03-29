<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Biodata;
use App\Categories;
use App\Cart;
use App\product;
use App\Bank;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Categories::all();
      $highestSoldProduct = product::orderBy('sold', 'desc')->take(4)->get();
      $countLowStock = product::where('stock', '<', 1)->get();
      return view('page.admin.landing.index', compact('categories', 'highestSoldProduct', 'countLowStock'));
    }

    public function biodata()
    {
      $user = Auth::user();
      $bank = Bank::all();
      return view('page.admin.biodata.index', compact('user', 'bank'));
    }

    public function biodataAdmin(Request $request)
    {
      $user = Auth::user();
      if ($request->file('photo') != null) {
        $photo = $request->file('photo');
        $namaPhoto = $photo->getClientOriginalName();
        $tujuan_upload = 'img/upload/fotoProfil';
        $photo->move($tujuan_upload, $namaPhoto);
        User::where('id', $user->id)
            ->update([
              'photo' => $namaPhoto,
            ]);
      }

      if ($request->password != null) {
        User::where('id', $user->id)
            ->update([
              'password' => Hash::make($request->password),
            ]);
      }

      User::where('id', $user->id)
          ->update([
            'name' => $request -> name,
            'email' => $request -> email,
          ]);

      return redirect()->route('admin.biodata.index')->with('success', 'Profile updated!');
    }

    public function biodataWebsite(Request $request)
    {
      $request->validate([
        'alamat' => 'required',
        'nomorTelepon' => 'required|numeric',
        'instagram' => 'required',
        'facebook' => 'required',
      ]);

      $user = Auth::user();
      User::where('id', $user->id)
          ->update([
            'alamat' => $request -> alamat,
            'nomorTelepon' => $request -> nomorTelepon,
          ]);

      Biodata::where('name', 'alamat')
            ->update([
              'keterangan' => $request -> alamat,
            ]);
      Biodata::where('name', 'nomorTelepon')
            ->update([
              'keterangan' => $request -> nomorTelepon,
            ]);
      Biodata::where('name', 'instagram')
            ->update([
              'keterangan' => $request -> instagram,
            ]);
      Biodata::where('name', 'facebook')
            ->update([
              'keterangan' => $request -> facebook,
            ]);

      return redirect()->route('admin.biodata.index')->with('success', 'Profile updated!');;
    }

    public function userList()
    {
      $countAllUser = User::count();
      $skip = 1;
      $limit = $countAllUser - $skip;
      $userList = User::skip($skip)->take($limit)->get();
      return view('page.admin.userList.landing.index', compact('userList'));
    }

    public function showUser($id)
    {
      $user = User::where('id', $id)->firstOrFail();
      return view('page.admin.userList.show.index', compact('user'));
    }

    public function sendShowUser(Request $request, $id)
    {
      $request->validate([
        'ongkir' => 'required|numeric',
      ]);

      User::where('id', $id)
          ->update([
            'ongkir' => $request -> ongkir,
          ]);

      $cart = Cart::where('user_id', $id)
                  ->where('status', 1)
                  ->first();
      $totalPricePivot = DB::table('cart_product')
                            ->where('cart_id', '=', $cart -> id)
                            ->sum('subTotalPrice');

      Cart::where('user_id', $id)
          ->where('status', 1)
          ->update([
            'status' => 2,
            'totalPrice' => $totalPricePivot + $request -> ongkir,
          ]);

      return redirect()->route('admin.showUser', $id)->with('success', 'Data Tersimpan!');
    }

    public function addBank(Request $request)
    {
      $request->validate([
        'photoBank' => 'required|image',
        'nameBank' => 'required',
        'norekBank' => 'required|numeric',
        'nameOwnBank' => 'required',
      ]);

      $photo = $request->file('photoBank');
      $namaPhoto = time().$photo->getClientOriginalName();
      $tujuan_upload = 'img/upload/bank';
      $photo->move($tujuan_upload, $namaPhoto);

      Bank::create([
        'photo' => $namaPhoto,
        'bank' => $request -> nameBank,
        'norek' => $request -> norekBank,
        'nama' => $request -> nameOwnBank,
      ]);

      return redirect()->route('admin.biodata.index');
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
