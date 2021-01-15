<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Biodata;
use App\Categories;
use App\product;

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
      return view('page.admin.biodata.index', compact('user'));
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

      return redirect()->route('admin.biodata.index');
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

      return redirect()->route('admin.biodata.index');
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

      return redirect()->route('admin.showUser', $id)->with('success', 'Data Tersimpan!');
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
