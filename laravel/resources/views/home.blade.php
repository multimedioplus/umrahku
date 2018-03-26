@extends('layouts.admin')
@section('content')
        <div class="container" style="margin-top:10px;">
          <div class="row">
              <div class="col-md-12" style=" margin-left:10px;padding:40px;">
                    <div class="row">
                        <div class="col-md-3 bg-white" style="padding:20px;margin:10px;">
                            <div class="row">
                                <div class="col-md-8" align="center">
                                  <font class="sub-title"><h6><b>VISITOR TODAY</b></h6></font>  
                                </div>
                                <div class="col-md-2">
                                    <h6 style="color:orange"><b>40</b></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 bg-white" style="padding:20px;margin:10px;">
                           <div class="row" >
                                <div class="col-md-10" align="center">
                                  <font class="sub-title"><h6><b>VISITOR MONTHLY</b></h6></font>  
                                </div>
                                <div class="col-md-2">
                                    <h6 style="color:darkblue"><b>40</b></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 bg-white" style="padding:20px;margin:10px;">
                            <div class="row">
                                <div class="col-md-10" align="center">
                                  <font class="sub-title"><h6><b>VISITOR YEARLY</b></h6></font>  
                                </div>
                                <div class="col-md-2">
                                    <h6  style="color:darkred"><b>500</b></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 bg-white" style="padding:20px;margin:10px;">
                            <div class="row">
                                <div class="col-md-10" align="center">
                                  <font class="sub-title"><h6><b>POST</b></h6></font>  
                                </div>
                                <div class="col-md-2">
                                    <h6 style="color:darkgreen"><b>40</b></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" style="margin-top:20px;">
                    <div class="col-md-12 bg-white" style="padding:20px">
                        <h5><b>Grafik Pengunjung</b></h5><hr>
                        <canvas id="myChart"></canvas>
                        
                    </div>    
                    </div>
                    
                    <div class="row" style="margin-top:20px;">
                    <div class="col-md-8 bg-white" style="padding:20px;margin:15px;">
                        <h5><b>Paket Favorit</b></h5><hr>
                        <canvas id="paketfav"></canvas>
                        
                    </div>
                    <div class="col-md-3 bg-white" style="padding:20px;margin:15px;">
                        <h5><b>AKTIVITAS</b></h5><hr>
                        <p><img src="{{asset('/public/image/')}}/foto.jpeg"><a href="#">Chalid Ade Rahman</a> Mengomentari <a href="#">Paket Travel Januari 2015</a></p>
                        
                    </div>
                    </div>
                     
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
                   
              <?php  } ?>
                </div>
            </div>
         </div>
    </div>
<div style="margin-top:20px;">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script>
      var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
        
            // The data for our dataset
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                datasets: [{
                    label: "Data Pengujung Satu Tahun",
                    backgroundColor: 'rgb(95, 99, 132)',
                    borderColor: 'rgb(95, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45, 47, 20, 43, 50, 55],
                }]
            },
        
            // Configuration options go here
            options: {}
        });
      
  </script>
    <script>
      var ctx = document.getElementById('paketfav').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'horizontalBar',
        
            // The data for our dataset
            data: {
                labels: ["Paket Umroh Januari", "Paket Umroh Februari", "Paket Umroh Maret", "Paket Umroh April", "Paket Umroh Mei", "Paket Umroh Juni", "Paket Umroh Juli", "Paket Umroh Agustus", "Paket Umroh September", "Paket Umroh Oktober", "Paket Umroh November", "Paket Umroh Desember"],
                datasets: [{
                    label: "Paket Favorite",
                    backgroundColor: 'rgb(255, 199, 132)',
                    borderColor: 'rgb(255, 199, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45, 47, 20, 43, 50, 55],
                }]
            },
        
            // Configuration options go here
            options: {}
        });
      
  </script>

</div>
@endsection
