<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $color = Color::all();
      $role = Auth()->user()->role;
      if (Auth()->user()->role == 'admin') {
        return view('admin.product.warna', ['color' => $color]);
      }else if (Auth()->user()->role == 'subadmin') {

      }
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
        'Warna' => 'required',
        'Gambar' => 'required',
      ]);

        $Gambar = $request->file('Gambar');
        $nama_Gambar = time()."_".$Gambar->getClientOriginalName();

        $tujuan_upload = 'imgupl/warna';
        $Gambar->move($tujuan_upload,$nama_Gambar);

        Color::create([
          'Warna' => $request->Warna,
          'Gambar' => $nama_Gambar,
        ]);

        return redirect('home/warna');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        //
    }
}
