<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function bahankain()
    {
      $product = Product::all();
      $role = Auth()->user()->role;
      if (Auth()->user()->role == 'admin') {
          return view('admin.product.bahankainadmin', ['product' => $product]);
      }else if (Auth()->user()->role == 'subadmin') {
          return view('admin.subadmin.product.bahankain', ['product' => $product]);
      }
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
      $this->validate($request, [
        'jeniskain' => 'required',
        'stock' => 'required',
        'keterangan' => 'required',
    		'file' => 'required',
    	]);

		    $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'imgupl/kain';
		    $file->move($tujuan_upload,$nama_file);

        Product::create([
    			'jeniskain' => $request->jeniskain,
          'stock' => $request->stock,
          'keterangan' => $request->keterangan,
          'file' => $nama_file,
    		]);

        return redirect('home/bahankain');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
