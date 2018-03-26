@extends('layouts.app')
@section('content')
    <div style="padding:10px;margin-top:-10px;">
      <div class="row containers">
        <div class="col-md-6">
          <div class="content" style="padding:20px;">
            <h1>Alamat Lengkap</h1>
            <p>Jika Anda memiliki cerita untuk berbagi atau pertanyaan yang belum terjawab di website kami, silakan menghubungi kami melalui rincian kontak yang tercantum di bawah atau mengisi formulir di sebelah kanan.</p>
            <p><i><b>Ruko Perkantoran C-11 The Suites Metro Apartement. Jalan Soekarno - Hatta No. 689B, Jati Sari, Buah batu, Kota Bandung, Jawa Barat 40286</b></i></p>
            <p>+62 812-8344-0952</p>
            <p>mail@umroh.travel</p>
            <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8024410440553!2d112.76522584989917!3d-7.2633107947314475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f980de3be43f%3A0xdb97fb005ae58469!2sRevio+Space!5e0!3m2!1sen!2sid!4v1512790500402" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6" >

          <div class="deskripsi" style="padding:20px;">
            <h1>Hubungi Kami</h1>
            <form>
          <div class="form-row" style="margin-left:-18px;margin-right:-18px;">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama Depan</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Depan">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nama Belakang</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Nama Belakang">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Email</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Nomor Telpon</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Nomor Telpon">
          </div>
          <div class="form-row" style="margin-left:-18px;margin-right:-18px;">
            <div class="form-group col-md-6">
              <label for="inputCity">Kota</label>
              <input type="text" class="form-control" id="inputCity" placeholder="Kota Anda">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Provinsi</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip"></label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" rows="10" id="inputAddress2" placeholder="Pesan"> </textarea>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        </div>
        </div>
      </div>
      </div>
        <!-- Swiper JS -->
        <script src="../dist/js/swiper.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.esm.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.esm.bundle.js"></script>

        <script>
        var swiper = new Swiper('.swiper-container', {
           spaceBetween: 30,
           centeredSlides: true,
           autoplay: {
             delay: 2500,
             disableOnInteraction: false,
           },
           pagination: {
             el: '.swiper-pagination',
             clickable: true,
           },
           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
           },
         });
        </script>
@endsection
