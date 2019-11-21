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

      return redirect('home/product/desain/');
    }

    public function desain()
    {
      $desain = Desain::all();
      $buy = Buy::all();
      return view('user.desain', ['desain' => $desain, 'buy' => $buy]);
      // return view('user.desain', compact('desain', 'buy'));
    }

    public function updesain(Request $request){
      Buy::where('user_id', Auth::user()->id)
            ->update([
            'desain_id' => $request -> desain_id,
          ]);

      return redirect('home/product/desain/warna');
    }

    public function color(){
      $color = Color::all();
      return view('user.warna', ['color'=> $color]);
    }

    public function upcolor(Request $request){
      Buy::where('user_id', Auth::user()->id)
            ->update([
            'color_id' => $request -> color_id,
          ]);

      return redirect('home');
    }

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
        //
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
