<?php

namespace App\Http\Controllers;

use Auth;
use App\Buy;
use App\Product;
use App\Desain;
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
      Buy::create([
          'user_id' => [Auth::user()->id],
          'product_id' => $request['product_id'],
      ]);

      return redirect('home/product/desain');
    }

    public function desain()
    {
      $desain = Desain::all();
      return view('user.desain', ['desain' => $desain]);
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
