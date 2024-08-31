<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    //show form
    public function showForm(){
      return view("umur.cekUmur");
    }

    public function cekProses(Request $request){
      // untuk mengecek request atau data yang diambil
      $request->validate([
        'umur' => 'required|integer|min:1'
      ]);

      // menyimpan data sementara dari form yang diinputkan user
      $request->session()->put('umur', $request->umur);

      // redirect ke halaman yang dilindungi middleware
      return redirect('/home');
    }
}
