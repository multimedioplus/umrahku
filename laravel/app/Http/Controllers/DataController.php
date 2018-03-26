<?php

namespace App\Http\Controllers;
use App\Data;
use App\User;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function welcome() {
         $user = data::all()->take(5);
         $termurah = package::orderBy('harga', 'ASC')->take(5)->get();
         $terlengkap = package::orderBy('harga', 'DESC')->take(5)->get();
         $terbaru = package::orderBy('created_at', 'ASC')->take(5)->get();
         return view('welcome', 
                    [
                        'user' => $user,
                        'terlengkap' => $terlengkap,
                        'termurah' => $termurah,
                        'terbaru' => $terbaru
                   ]
                );
         
     }
       
     public function user()
       {    
           $email = Auth::user()->email;
           $item = data::where('email', $email)->get();
           return view('admin.user')->with('data', $item);
       }
       
      public function detail(Request $request, $id)
        {
            $data = package::where('id','=',$id)->get();    
            return view('display.detail-paket')->with('data', $data);
        }

	    public function index()
      {
        $company = data::all();
        return view('input/paket')->with('data', $company);
      }

      public function upData(Request $request){

     $company = data::all();
     $nama = $request->input('nama');
     $email = $request->input('email');
     $hp = $request->input('hp');
     $alamat = $request->input('alamat');
     $deskripsi = $request->input('deskripsi');
     $image = $request->file('foto');

    //  echo "$nama - $email - $hp - $alamat - $deskripsi - $image";

     $user = data::where('email', '=', $email)->first();
     if ($user === null) {
       $data = new Data;
       $data->name = $nama;
       $data->email = $email;
       $data->hp = $hp;
       $data->alamat = $alamat;
       $data->deskripsi = $deskripsi;
       $data->ktp = 'ktp';
       $data->passport = 'passsport';

       /*  Symfony \ Component \ Debug \ Exception \ FatalThrowableError (E_ERROR) Call to a member function move() on string
           Solve : Script move() tidak bisa memindahkan string, yang bisa dipindahkan adalah file. sehingga harus dibedakan antara pengambilan item file dan nama file itu sendiri
       */

       if ($request->hasFile('foto')) {
           $imageName = $image->getClientOriginalName();
           $image->move(public_path(). '/foto/', $imageName);
           $data->foto = $imageName;
       }

       $data->save();
       return view('admin.user');

     } else {
        
       $data = user::where('email', $email);
       $data->update(['name' => $nama]);

       $data = data::where('email', $email);
       $data->update(['name' => $nama]);
       $data->update(['hp' => $hp]);
       $data->update(['alamat' => $alamat]);
       $data->update(['deskripsi' => $deskripsi]);
       $data->update(['ktp' => 'ktp']);
       $data->update(['passport' => 'passport']);

      //  echo "$nama - $email - $hp - $alamat - $deskripsi";

       if ($request->hasFile('foto')) {
           $imageName = $image->getClientOriginalName();
           $image->move(public_path(). '/foto/', $imageName);
           $data->update(['foto' => $imageName]);
       }

       $item = data::where('email', $email)->get();
       return view('admin.user')->with('data', $item);

     }

   }


   public function delcom(Request $request, $id)
     {
       $company = data::all();
       $hapus = DB::table('data')->where('id', '=', $id)->delete();
       return view('input.paket')->with('data', $company);
     }

   public function checklist()
   {
       return view('display.checklist');
   }

    public function call()
    {
        return view('display.call');
    }


    public function tentang()
    {
        return view('display.tentang');
    }

    public function paket()
    {
        $data = package::all();
        return view('display.product')->with('data', $data);
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
