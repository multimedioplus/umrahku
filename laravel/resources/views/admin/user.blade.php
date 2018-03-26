@extends('layouts.admin')
@section('content')
        <div class="container">
            
          <div class="row">
            <div class="col-md-3" style="margin-top:30px;">
              <?php

               foreach($data as $data)
               {
                   $nama = $data->name;
                   $email = $data->email;
                   $hp = $data->hp;
                   $alamat = $data->alamat;
                   $deskripsi = $data->deskripsi;
                   $foto = $data->foto;
                   ?>

              <form method="post" action="{{url('/upData')}}" enctype="multipart/form-data">
              <div class="foto" style="padding:30px;background:#fff; height:auto;">
                <?php if ($foto == '') {
                        echo "<img src='https://ecs7.tokopedia.net/img/cache/300/default_v3-usrnophoto1.png'/>";
                      } else { ?>
                        <img src="{{asset('/laravel/public/foto/')}}<?php echo "/$foto"; ?>" width="100%"/>
                      <?php }  ?>
                <div class="deskripsi" style="margin-top:10px;">
                  <label class="btn btn-default btn-file bg-primary text-white" style="width:100%">
                      Upload Foto<input type="file" name="foto" style="display: none;">
                  </label>
                  <p style="font-size:10px;margin-top:10px;">
                    Besar file: maksimum 10.000.000 bytes (10 Megabytes)<br />
                    Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                  </p>
                </div>
              </div>

            </div>
            <div class="col-md-8 bg-white" style=" margin-left:20px;padding-left:20px;margin-top:30px;padding:40px;>
              <div class="row" style="width:100%; margin-left:-5px; margin-top;10px;">
                <div class="containers">
                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                      <label for="nama">Nama Perusahaan</label>
                      <input type="text" class="form-control" style="border:none;font-size:18px;" id="nama" name="nama" placeholder="Nama Perusahaan" value="<?php echo $nama; ?>">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                      @if($errors->has('nama'))
                          <span class="help-block">{{ $errors->first('nama') }}</span>
                      @endif
                  </div>

                  <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                      <label for="email">Email Perusahaan</label>
                      <input type="text" class="form-control" id="email" style="border:none;font-size:18px;" placeholder="Email Perusahaan" disabled value="{{ Auth::user()->email }}">
                      <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                      @if($errors->has('email'))
                          <span class="help-block">{{ $errors->first('email') }}</span>
                      @endif
                  </div>

                  <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                      <label for="">Nomor Telpon</label>
                      <input type="text" class="form-control" id="hp" style="border:none;font-size:18px;" name="hp" placeholder="Nomor Telpon Perusahaan" value="<?php echo $hp; ?>">
                      @if($errors->has('hp'))
                          <span class="help-block">{{ $errors->first('hp') }}</span>
                      @endif
                  </div>

                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                      <label for="alamat">Alamat Perusahaan</label>
                      <textarea class="form-control" id="alamat" name="alamat" style="border:none;font-size:18px;" placeholder="Alamat Perusahaan"><?php echo $alamat; ?></textarea>
                      @if($errors->has('alamat'))
                          <span class="help-block">{{ $errors->first('alamat') }}</span>
                      @endif
                  </div>

                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                      <label for="deskripsi">Deskripsi Perusahaan</label>
                      <textarea class="form-control" id="deskripsi" style="border:none;font-size:18px;" name="deskripsi" placeholder="Deskripsi Perusahaan"><?php echo $deskripsi; ?></textarea>
                      @if($errors->has('deskripsi'))
                          <span class="help-block">{{ $errors->first('deskripsi') }}</span>
                      @endif
                  </div>

                  <button type="submit" class="btn btn-default btn-file bg-primary text-white" style="width:100%;margin-left:-1px;">Update</button>
              </form>
              <?php  } ?>
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
</div>
@endsection
