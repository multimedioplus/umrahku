@extends('layouts.admin')
@section('content')
        <div class="container" style="margin-top:30px;">
          <div class="row">
              <div class="col-md-12 bg-white" style=" margin-left:10px;margin-top:30px;padding:40px;">
                  <h3>All Package</h3><hr>
                    <table width="100%" align="center">
                    <tr align="center">
                        <td>Foto</td>
                        <td>Nama</td>
                        <td>Harga</td>
                        <td>Rute</td>
                        <td>Pesawat</td>
                        <td>Hotel</td>
                        <td>Seat</td>
                        <td>Berangkat</td>
                        <td>Kembali</td>
                        <td width="7%">Option</td>
                    </tr>
                    
              <?php

               foreach($data as $data)
               {
                   $id = $data->id;
                   $nama = $data->nama;
                   $deskripsi = $data->deskripsi;
                   $harga = $data->harga;
                   $rute = $data->rute;
                   $hotel = $data->hotel;
                   $kamar = $data->kamar;
                   $pesawat = $data->pesawat;
                   $berangkat = $data->berangkat;
                   $kembali = $data->kembali;
                   $foto = $data->foto;
                   $seat = $data->seat;
                   ?>
                   
                   <tr class="table"  align="center">
                        <td><img src="{{asset('public/image/')}}<?php echo '/'.$foto; ?>" style="width:70px;height:70px;"></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $harga; ?></td>
                        <td><?php echo $rute; ?></td>
                        <td><?php echo $pesawat; ?></td>
                        <td><?php echo $hotel; ?></td>
                        <td><?php echo $seat; ?></td>
                        <td><?php echo $berangkat; ?></td>
                        <td><?php echo $kembali; ?></td>
                        <td><a href="/delete-<?php echo $id; ?>"><i title="Delete" class="fa  fa-trash-o fa-1"></i></a> | <a href=""><i title="update" class="fa fa-edit fa-1"></i></a></td>
                    </tr>
              
              <?php  } ?>
                </table>
                </div>
            </div>
         </div>
    </div>
<div style="margin-top:20px;">
  <script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
  }
  </script>
</div>
@endsection
