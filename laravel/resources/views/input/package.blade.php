@extends('layouts.admin')

@section('content')

        <div class="container" style="margin-top:30px;">
          <div class="row">
            <div class="col-md-3">
              <form method="POST" action="{{url('/inputPackage')}}" enctype="multipart/form-data">
               <div class="foto" style="padding:30px;background:#fff; height:auto;">
                <img src="https://assets.materialup.com/uploads/9b911507-494a-4534-bdfb-81bb68bf6495/512x512.png"  width="100%"/>
                <div class="deskripsi" style="margin-top:10px;">
                  <label class="btn btn-default btn-file bg-primary text-white" style="width:100%">
                      Upload Gambar<input required type="file" name="foto" style="display: none;">
                  </label>
                  <p style="font-size:10px;margin-top:10px;">
                    Besar file: maksimum 10.000.000 bytes (10 Megabytes)<br />
                    Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                  </p>
                </div>
              </div>

            </div>
            <div class="col-md-8 bg-white" style=" margin-left:20px;padding-left:20px;padding:40px;">
              <div class="row" style="width:100%; margin-left:-5px; margin-top;10px;">
                <div class="containers">
                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                      <label for="nama">Nama Paket</label>
                      <input required type="text" class="form-control" id="nama" name="nama" placeholder="Nama Paket" value="{{ old('nama') }}">
                      <input required type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                      @if($errors->has('nama'))
                          <span class="help-block">{{ $errors->first('nama') }}</span>
                      @endif
                  </div>

                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                      <label for="editor1">Deskripsi Paket</label>
                      <textarea class="form-control" id="editor1" name="deskripsi" style="padding:10px;" placeholder="Deskripsi Paket">{{ old('deskripsi') }}</textarea>
                  </div>

                  <div class="row">
                      <div class="col-md-4" style="padding:10px;">
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="harga">Harga</label>
                            <input required type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                        </div>
                      </div>
                      
                      <div class="col-md-4" style="padding:10px;">
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="kapasitas">Kapasitas</label>
                            <input required type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Untuk Berapa Orang">
                        </div>
                      </div>

                  <div class="col-md-4" style="padding:10px;">
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="rute">Rute</label>
                        <select required class="form-control" id="rute" name="rute">
                            <option value="" disabled selected>Pilih Rute Keberangkatan</option>
                            <option value="SURABAYA - MADINAH">Surabaya - Madinah</option>
                            <option value="JAKARTA-MADINAH">Jakarta - Madinah</option>
                            <option value="JOGJA-MADINAH">Jogja - Madinah</option>
                            <option value="BANDUNG-MADINAH">Bandung - Madinah</option>
                            <option value="MAKASSAR-MADINAH">Makasar - Madinah</option>
                            <option value="BEKASI-MADINAH">Bekasi - Madinah</option>
                            <option value="MALANG-MADINAH">Malang - Madinah</option>
                        </select>
                    </div>
                  </div>
              </div>

                  <div class="row">
                    <div class="col-md-4" style="padding:10px;"> 
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="hotel">Nama Hotel</label>
                          <select required class="form-control" id="hotel" name="hotel">
                            <option value="" disabled selected>Pilih Hotel</option>
                            <option value="SA Fairmont Hotel">A Fairmont Hotel</option>
                            <option value="Swiss Hotel Makkah">Swiss Hotel Makkah</option>
                            <option value="Raffles Makkah Palace Hotel">Raffles Makkah Palace Hotel</option>
                            <option value="Al Safwa Orchid Royale Hotel">SAl Safwa Orchid Royale Hotel</option>
                            <option value="Mövenpick Hotel & Residence Hajar Tower Makkah">Mövenpick Hotel & Residence Hajar Tower Makkah</option>
                            <option value="Dar Al Tawhid Intercontinental">Dar Al Tawhid Intercontinental</option>
                            <option value="Dar Al Tawhid Intercontinental">Dar Al Tawhid Intercontinental</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4" style="padding:10px;">
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="kamar">Jenis Kamar</label>
                           <select required  class="form-control" id="kamar" name="kamar">
                            <option value="" disabled selected>Pilih Jenis Kamar</option>
                            <option value="Quad">Quad : 1 Kamar dengan 4 Kasur</option>
                            <option value="Triple">Triple : 1 Kamar dengan 3 Kasur</option>
                            <option value="Double">Double : 1 Kamar dengan 2 Kasur</option>
                            <option value="All In" title="Quad Triple Double">All In</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4" style="padding:10px;">
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="pesawat">Maskapai</label>
                           <select required class="form-control" id="pesawat" name="pesawat" >
                            <option value="" disabled selected>Pilih Jenis Kamar</option>
                            <option value="Emirates">Emirates</option>
                            <option value="Qatar Airways">Qatar Airways</option>
                            <option value="Singapore Airlines">Singapore Airlines</option>
                            <option value="Cathay Pasific Airlines">Cathay Pasific Airlines</option>
                            <option value="Etihad Airways">Etihad Airways</option>
                            <option value="Garuda Indonesia">Garuda Indonesia</option>
                            <option value="Turkish Airlines">Turkish Airlines</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-left:3px;">
                    <div class="col-md-6" style="margin-left:-15px;padding:10px;">
                      <label for="berangkat">Jadwal Keberangkatan</label>
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                      <input required name="berangkat" id="berangkat" placeholder="Berangkat" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" style="padding:5px;font-size:12px;height:40px;background: #fff;border: 1px solid #e3e3e3;border-radius: 3px; width:100%;">
                    </div>
                  </div>

                    <div class="col-md-6"  style="padding:10px;">
                      <label for="kembali">Jadwal Kembali</label>
                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                      <input required name="kembali" id="kembali" placeholder="Jadwal Kembali" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" style="padding:5px;font-size:12px;height:40px;background: #fff;border: 1px solid #e3e3e3;border-radius: 3px; width:100%;">
                    </div>
                  </div>
                  </div>

                  <button type="submit" class="btn btn-default btn-file bg-primary text-white" style="width:100%;margin-left:-1px;">Submit</button>
              </form>
                </div>
              </div>
            </div>
          </div>
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
</div><br /><br />
@endsection
