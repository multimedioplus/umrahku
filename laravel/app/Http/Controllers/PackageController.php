<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
  public function index()
  {
      return view('input/package');
  }
  
   public function listPackage()
  {
      $name = Auth::user()->name;
      $data = package::where('user','=',$name)->get();
     return view('admin.listPackage')->with('data', $data) ;
  }

  public function inPackage()
   {
       return view('input/package');
   }
       
  public function insert(Request $request){

   // Get Data From Form
   $nama = $request->input('nama');
   $deskripsi = $request->input('deskripsi');
   $harga = $request->input('harga');
   $rute = $request->input('rute');
   $hotel = $request->input('hotel');
   $kamar = $request->input('kamar');
   $seat = $request->input('kapasitas');
   $pesawat = $request->input('pesawat');
   $berangkat = $request->input('berangkat');
   $kembali = $request->input('kembali');
   $user = Auth::user()->name;
   $image = $request->file('foto');
    
    //Insert to Database
    $data = new Package;
    $data->nama = $nama;
    $data->seat = $seat;
    $data->deskripsi = $deskripsi;
    $data->harga = $harga;
    $data->rute = $rute;
    $data->hotel = $hotel;
    $data->kamar = $kamar;
    $data->pesawat = $pesawat;
    $data->berangkat = $berangkat;
    $data->kembali = $kembali;
    $data->user = $user;

    /*  Symfony \ Component \ Debug \ Exception \ FatalThrowableError (E_ERROR) Call to a member function move() on string
        Solve : Script move() tidak bisa memindahkan string, yang bisa dipindahkan adalah file. sehingga harus dibedakan antara pengambilan item file dan nama file itu sendiri
    */

    /* Unable to write in the "/var/www/html/umrahkuid/laravel/public/img/" directory
      Solve : Check Permission Of Folder change to with Chmod 777
    */

    if ($request->hasFile('foto')) {
        $imageName = $image->getClientOriginalName();
        $image->move(public_path(). '/image/', $imageName);
        $data->foto = $imageName;
    }

    echo "$user - $nama - $deskripsi - $rute - $hotel- $kamar - $pesawat - $berangkat - $kembali - $image - $imageName - ".public_path()."/image"."/$imageName";

    $data->save();
    // return view('input.package');
   }

   public function detail(Request $request)
   {
     $data = package::where('id','=',$id)->get();
     return view('display.detail-paket')->with('data', $data) ;
   }


  public function search(Request $request){
   {
     $berangkat = $request->input('berangkat');
     $kembali = $request->input('kembali');
     $dari= $request->input('dari');
     $hingga= $request->input('hingga');
     $search = $request->input('search');
     if(isset($search)){
     $data = package::where('nama','like','%'.$search.'%')->get();
     return view('display.product')->with('data', $data)->with('search', $search);    
     } if(isset($dari) and isset($hingga)){
    //  echo "$dari - $hingga";
        $data = package::whereRaw('harga >= '.$dari.' and harga <= '.$hingga)->get();
        return view('display.product')->with('data', $data);
     }
  }
 }

 public function sort(Request $request, $id) {
     if($id == 'termurah') {
         $data = package::orderBy('harga', 'ASC')->get();
        return view('display.product')->with('data', $data);
     } else  if($id == 'termahal') {
         $data = package::orderBy('harga', 'DESC')->get();
        return view('display.product')->with('data', $data);
     } else  if($id == 'terbaru') {
         $data = package::orderBy('created_at', 'ASC')->get();
        return view('display.product')->with('data', $data);
     } else {
         $data = package::all()->get();
        return view('display.product')->with('data', $data);
     }
 }
}