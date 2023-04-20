@extends('layout.template')

@section('konten')
<div class="container-fluid d-flex bg-green" style="margin-top: 60px; height: 70vh;">
  <section class="my-auto" data-aos="fade-up" style="margin-left: 80px">
    <p class="font text-light" style="font-size: 56px; line-height: 56px;">Siapkan petualangan campingmu dengan nyaman dan terjangkau</p>
    <p class="font text-soft-green" style="font-size: 32px">Sewa alat camping dari kami sekarang!</p>
  </section>
  <img src="{{url('asset/camping.svg')}}" data-aos="fade-up" alt="..." class="m-4 text-center" style="height: 400px;">
</div>
<div class="container-fluid d-flex justify-content-center bg-soft-green py-1" style="height: 15vh">
  <img src="{{url('asset/rei.png')}}" alt="..." class="mx-5" data-aos="fade-up">
  <img src="{{url('asset/tnf.png')}}" alt="..." class="mx-5" data-aos="fade-up">
  <img src="{{url('asset/eigerr.png')}}" alt="..." class="mx-5" data-aos="fade-up">
  <img src="{{url('asset/consina.png')}}" alt="..." class="mx-5 my-1" data-aos="fade-up">
</div>

<div data-aos="fade-right" class="container-fluid bg-light d-flex mt-2" style="height: 60vh;">
  <div id="carouselAutoplaying" class="carousel slide my-auto" data-bs-ride="carousel">
    <div class="carousel-inner mx-5" style="height: 50vh; width: 80vh; border-radius: 10px;">
      <div class="carousel-item active">
        <img src="{{url('asset/camprent1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{url('asset/camprent2.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{url('asset/camprent3.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
    <section class="font my-auto">
      <p class="text-green" style="font-size: 42px; line-height: 45px;">Tidak punya waktu untuk menyiapkan peralatan berkemah sendiri?</p> 
      <p class="text-soft-green" style="font-size: 30px; line-height: 20px">Jangan khawatir!</p> 
      <p class="text-soft-green" style="font-size: 20px; line-height: 23px">Kami menyediakan rental camping dengan perlengkapan lengkap dan berkualitas untuk memenuhi kebutuhan liburan Anda.</p> 
  </div>
</div>

<div class="row pt-3">
  <section data-aos="fade-left" class="font d-flex justify-content-center text-green" style="font-size: 42px;">BEST SELLER</section>
  <div class="row row-cols-1 row-cols-md-3 mb-4 mx-auto">
    <div class="col">
      <div class="card h-100" data-aos="fade-left" style="border-color: #B7B78A; border-width: 2px">
        <img src="{{url('asset/tent.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body font">
          <h5 class="card-title">Tenda</h5>
          <p class="card-text">Kami memiliki Tenda berkualitas tinggi, anti badai dan bocor.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" data-aos="fade-left" style="border-color: #B7B78A; border-width: 2px">
        <img src="{{url('asset/chair.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body font">
          <h5 class="card-title">Kursi Lipat</h5>
          <p class="card-text">Kursi lipat dengan gaya estetik, membuat liburanmu lebih kekinian.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" data-aos="fade-left" style="border-color: #B7B78A; border-width: 2px">
        <img src="{{url('asset/hammock.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body font">
          <h5 class="card-title">Hammock</h5>
          <p class="card-text">Hammock yang kami sewakan sudah berstandar Internasional, cocok untuk bersantai menikmati alam</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{url('js/script.js')}}"></script>

@endsection