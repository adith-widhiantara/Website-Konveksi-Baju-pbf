<?php

namespace App\Http\Controllers;

use Auth;
use App\Buy;
use App\Product;
use App\Desain;
use App\Color;
use Illuminate\Http\Request;

class BuyingController extends Controller
{
    // Proses Kain
    public function kain()
    {
      $product = Product::all();
      return view('user.buy.kain', ['product' => $product]);
    }

    public function upkain(Request $request)
    {
      $this->validate($request, [
        'product_id' => 'required',
      ]);

      $buy = new Buy;
      $buy->product_id = $request->product_id;
      Auth::user()->buy()->save($buy);
      return redirect('home/product/desain/'.$buy->id);
    }
    // End Proses Kain

    // Proses Desain
    public function desain(Buy $buy)
    {
      $desain = Desain::all();
      return view('user.buy.desain', ['desain' => $desain]);
    }

    public function updesain(Request $request, Buy $buy){
      $this->validate($request, [
        'desain_id' => 'required',
      ]);

      Buy::where('id', $buy->id)
            ->update([
            'desain_id' => $request -> desain_id,
          ]);
      return redirect('home/product/desain/warna/'.$buy->id);
    }
    // End Proses Desain

    // Proses Color
    public function color(){
      $color = Color::all();
      return view('user.buy.warna', ['color'=> $color]);
    }

    public function upcolor(Request $request, Buy $buy){
      $this->validate($request, [
        'color_id' => 'required',
      ]);

      Buy::where('id', $buy->id)
            ->update([
            'color_id' => $request -> color_id,
          ]);
      return redirect('home/product/desain/warna/detailproduct/'.$buy->id);
    }
    // End Proses Color

    // detail product
    public function detailproduct(Buy $buy){
      $buy = Buy::where('id', $buy->id)->get();
      return view('user.buy.detailproduct', compact('buy'));
    }

    public function updetailproduct(Request $request, Buy $buy){
      $this->validate($request, [
        'jumlah' => 'required',
        'ukuran' => 'required',
      ]);

      Buy::where('id', $buy->id)
            ->update([
            'jumlah' => $request -> jumlah,
            'ukuran' => $request -> ukuran,
            'biaya' => $request -> jumlah * $buy -> product -> harga,
          ]);
      return redirect('home/keranjang');
    }
    // end detail product

    public function indexkeranjang(){
      $buy = Buy::where('user_id', Auth::user()->id)->get();
      return view('user.keranjang', ['buy' => $buy]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $buy = Buy::all();
      return view('admin.transaksi.total', compact('buy'));
    }

    public function do()
    {
      $buy = Buy::where('statuspembayaran', 0)->get();
      return view('admin.transaksi.berlangsung', compact('buy'));
    }

    public function check()
    {
      $buy = Buy::where('statuspembayaran', 1)->get();
      return view('admin.transaksi.check', compact('buy'));
    }

    public function yes()
    {
      $buy = Buy::where('statuspembayaran', 2)->get();
      return view('admin.transaksi.berhasil', compact('buy'));
    }

    public function no()
    {
      $buy = Buy::where('statuspembayaran', 3)->get();
      return view('admin.transaksi.gagal', compact('buy'));
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
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show(Buy $buy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function edit(Buy $buy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buy $buy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buy $buy)
    {
        //
    }
}
