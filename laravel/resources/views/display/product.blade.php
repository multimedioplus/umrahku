@extends('layouts.app')
@section('content')
   <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb text-primary" style="background:#fff; margin-top:10px;margin-bottom:-25px;">
            <li class="breadcrumb-item">
              <a href="{{url('/paket')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Paket</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <hr />
  <div class="m-0 p-2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <?php if(isset($search)){
              ?>
          <p class="lead" style="margin-left:0px;">Hasil Pencarian : " <b style="text-transform: capitalize;"><?php echo $search; ?></b> "</p>    
            <?php
            }
            ?>
          
        </div>
        <div class="col-md-8" style="text-align:right;">
          <a class="btn btn-primary" href="">Grid</a>
          <a class="btn btn-primary" href="">List</a>
          <font class="" style="margin:5px;color:grey;">Urutkan</font>
          <div class="btn-group text-left mx-auto">
            <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"> Relevansi </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('paket-termurah')}}">Termurah</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('paket-terbaru')}}">Terbaru</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('paket-populer')}}">Populer</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('paket-termahal')}}">Termahal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-1" style="margin-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <p class="w-100 p-0"><b>Cari lebih detail</b></p>
          <p class="m-1"><b>Kategori</b></p>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center"> Umroh 10 Hari <span class="badge badge-primary badge-pill">14</span> </li>
            <li class="list-group-item d-flex justify-content-between align-items-center"> Hotel Bintang 5 <span class="badge badge-primary badge-pill">2</span> </li>
            <li class="list-group-item d-flex justify-content-between align-items-center"> Umroh Ke <span class="badge badge-primary badge-pill">1</span> </li>
          </ul>
          <p class="m-0 p-2"><b>Rentang Harga&nbsp;</b></p>
          <form class="form-inline" method="post" action="{{url('paket-search')}}">
            <input type="text" name="dari" placeholder="Dari" class="form-control w-100 m-1">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="hingga" class="form-control w-100 m-1" placeholder="Hingga">
            <input type="submit" value="Cari"  class="btn btn-primary w-100 m-1 border border-secondary text-center btn-sm btn-block"/>
          </form>
          <p class="m-1 p-1"><b>Rekomendasi</b></p>
          <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('laravel/public/image/umrah_turki.jpg')}}" data-holder-rendered="true">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('laravel/public/image/paketumroh.jpg')}}" data-holder-rendered="true">
              </div>
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{asset('laravel/public/image/umrah+aqsa.JPG')}}" data-holder-rendered="true"> </div>
            </div>
          </div>
          </div>
          <div class="col-md-10" style="padding-left:20px;width:100%;">
          <div class="row" style="padding:5px;margin-left:10px;">
          <?php
          foreach($data as $data)
          {
               $id = $data->id;
               $nama = $data->nama;
               $deskripsi = $data->deskripsi;
               $harga = $data->harga;
               $user = $data->user;
               $rute = $data->rute;
               $kamar = $data->kamar;
               $pesawat = $data->pesawat;
               $berangkat = $data->berangkat;
               $kembali = $data->kembali;
               $foto = $data->foto;
               $seat = $data->seat;
          ?>
            <div class="col-md-2 product-card-home">
              <img class="img-fluid d-block" src="{{asset('laravel/public/image/')}}<?php echo '/'.$foto; ?>">
              <h2 class="judul-produk" style="font-size:14px;"><a href="detail-paket-<?php echo $id; ?>"><?php echo $nama; ?></a></h2>
              <p class="harga-produk">Rp <?php echo number_format($harga); ?></p>
              <p style="text-align:center; margin-top:-15px;">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </p><hr />
              <p style="text-align:center; font-size:12px;">
                <?php echo $user; ?>
              </p>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <br />
@endsection
