<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

      public function postlogin(Request $request){
        $this->validate($request, [
          'email' => 'required',
          'password' => 'required',
        ]);

      	if (Auth::attempt($request->only('email','password'))) {
      		return redirect('/home');
      	}
          return redirect('/login');
      }

      public function role()
      {
          $role = Auth()->user()->role;
          if (Auth()->user()->role == 'user') {
              return view('home');
          }else{
              return view('admin.home');
          }

          // if (Auth()->user()->role == 'admin') {
          //     return view('admin.home');
          // }else if (Auth()->user()->role == 'user') {
          //     return view('home');
          // }else if (Auth()->user()->role == 'subadmin') {
          //     return view('admin.subadmin.home');
          // }
      }

      public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
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
        return view('admin.register');
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
