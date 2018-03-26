<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     
     
    public function index()
    {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        $data = data::where('email', $email)->get();

        if ($data == '[]') {
          $data = new Data;
          $data->name = $name;
          $data->email = $email;
          $data->hp = '';
          $data->alamat = '';
          $data->deskripsi = '';
          $data->ktp = '';
          $data->passport = '';
          $data->foto = '';
          $data->save();

          $item = data::where('email', $email)->get();
          return view('home')->with('data', $item);

        } else {
          return view('home')->with('data', $data);
        }
    }

}
