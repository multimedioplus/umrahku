@extends('layouts.app')
@section('content')
    <div class="page" style="padding:60px;background:#ddd">
      <div class="row">
        <div class="col-md-8" style="background:#fff;padding:20px; margin-right: 40px;">
            <div class="row">
            <div class="col-md-4" style="padding:30px;">
          <?php
          foreach($data as $data)
          {
               $id = $data->id;
               $nama = $data->nama;
               $deskripsi = $data->deskripsi;
               $harga = $data->harga;
               $user = $data->user;
               $hotel = $data->hotel;
               $foto = $data->foto;
               $pesawat = $data->pesawat;
               $berangkat = $data->berangkat;
               $kembali = $data->kembali;
               $rute = $data->rute;
               $kapasitas = $data->kapasitas;
               $seat = $data->seat;
               $kamar = $data->kamar;
          ?>
                <img src="{{asset('/laravel/public/img/')}}<?php echo "/$foto"; ?>" width="92%;"style="margin-left: 30px;margin-bottom:40px;">
                <h6 align="center">Detail Paket </h6><hr>
                <table width="100%" style="font-size:12px;">
                    <tr>
                        <td width="3%">Maskapai </td>
                        <td width="30%">: <?php echo $pesawat; ?></td>
                    </tr>
                    <tr>
                        <td width="3%">Rute </td>
                        <td width="30%">: <?php echo $rute; ?></td>
                    </tr>
                     <tr>
                        <td width="3%">Berangkat </td>
                        <td width="30%">: <?php echo $berangkat; ?></td>
                    </tr>
                     <tr>
                        <td width="3%">Kembali </td>
                        <td width="30%">: <?php echo $kembali; ?></td>
                    </tr>
                    <tr>
                        <td width="3%">Hotel </td>
                        <td width="30%">: <?php echo $hotel; ?></td>
                    </tr>
                    <tr>
                        <td width="3%">Kamar </td>
                        <td width="30%">: <?php echo $kamar; ?></td>
                    </tr>
                     <tr>
                        <td width="3%">Tersedia </td>
                        <td width="30%">: <?php echo $seat." Tiket"; ?></td>
                    </tr>
                    <tr>
                        <td width="3%">Harga </td>
                        <td width="30%">: <?php echo "Rp ".number_format($harga) ?></td>
                    </tr>
                    
                    
                </table>
            </div>
            <div class="col-md-8" style="padding:20px;">
              <div class="deskripsi" style="padding:10px; margin-top:-20px;">
                <h1 style="font-size:22px;font-weight:500; margin-top:10px;"><?php echo $nama; ?></h1>
                <hr>
                <table width="100%" style="font-size:7px;">
                    <tr> 
                        <td width="20%"><i class="fa fa-clock-o fa-2x text-primary"></i><font class="text-primary" style="font-size:15px;">  Durasi : <?php echo "10"; ?></td>
                        <td width="30%"><i class="fa fa-plane fa-2x text-primary"></i><font class="text-primary" style="font-size:15px;">  Berangkat : <?php echo $berangkat; ?></td>
                        <td width="30%"><i class="fa fa-plane fa-2x text-primary fa-rotate-90"></i><font class="text-primary" style="font-size:15px;"> Kembali : <?php echo $kembali; ?></font></td>
                    </tr>
                </table>
                <hr>
                <div> <?php echo $deskripsi; ?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <!--Pricing card-->
          <div class="card pricing-card" >
            <!--Card image-->
            <div class="view gradient-card-header blue-gradient" style="height:90px;background:linear-gradient(40deg,#4EBFA5,#008E76); padding:25px;text-align:center;color:#fff;">
                <h2 class="h2-responsive" style="font-weight: 500;"><?php echo "Rp". number_format($harga).",-" ?></h2>
            </div>
            <p style="margin-bottom: 0px;padding:10px;background:#46596E;text-align:center;color:#fff;font-weight: 400;" ><?php echo $seat; ?> Tiket Tersedia</p>
            <!--/Card image-->
        </div>

        <div class="card pricing-card" >
          <!--Card image-->
          <div style="height:auto;background:#fff; padding:10px;text-align:center;">
              <h5 style="font-weight: 500;color:#000;font-family: 'Kaushan Script';">Saya Tertarik Dengan Paket Umroh Ini</h5>
              <hr />
              <input type="text" name="nama" placeholder="Nama Lengkap" style="padding:5px;border: 1px solid #e3e3e3;border-radius: 3px; width:90%;margin-bottom:10px;">
              <input type="text" name="email" placeholder="Email" style="padding:5px;border: 1px solid #e3e3e3;border-radius: 3px; width:90%;margin-bottom:10px;">
              <input name="mulai" placeholder="Keberangkat Mulai" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" style="margin-bottom:10px;padding:5px;background: #fff;border: 1px solid #e3e3e3;border-radius: 3px; width:90%;">
              <input name="mulai" placeholder="Keberangkatan Sampai" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" style="padding:5px;margin-bottom:10px;background: #fff;border: 1px solid #e3e3e3;border-radius: 3px; width:90%;">
              <p style="font-size:10px; text-align:justify;padding:10px;">
                Customer Service kami akan menghubungi Anda, sesuai dengan preferensi waktu yang anda masukan.
              </p>
              <input value="Saya Berminat" type="submit" class="btn text-white btn-info btn-fill" style="width:95%;background:#008E76;" />
          </div>
          <!--/Card image-->
      </div>
      </div>
      <?php } ?>
      </div>
@endsection
