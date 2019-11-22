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
      return view('user.kain', ['product' => $product]);
    }

    public function upkain(Request $request)
    {
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
      return view('user.desain', ['desain' => $desain]);
    }

    public function updesain(Request $request, Buy $buy){
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
      return view('user.warna', ['color'=> $color]);
    }

    public function upcolor(Request $request, Buy $buy){
      Buy::where('id', $buy->id)
            ->update([
            'color_id' => $request -> color_id,
          ]);
      return redirect('home/keranjang');
    }
    // End Proses Color

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
