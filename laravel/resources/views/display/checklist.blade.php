@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row containers">

        testing
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
