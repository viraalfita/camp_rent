@extends('layout.template')

@section('konten')

<div class="container my-3 p-5 bg-dark">
  <div class="d-flex" style="height: 90vh">
    <div class="text-center m-auto p-5 bg-dark">
        <h1 class="display-1 text-light animate__animated animate__fadeInDown"><strong>PILIHAN TERBAIK</strong></h1>
        <h1 class="display-3 text-light animate__animated animate__fadeInUp">UNTUK LIBURAN ANDA</h1>
    </div>
  </div>
</div>

<div class="bg-secondary" data-aos="fade-right">
    <hr>
</div>

<div class="container">
  <div id="carouselAutoplaying" data-aos="fade-right" class="carousel slide bg-dark p-5 d-flex" style="height: 90vh" data-bs-ride="carousel">
    <div class="carousel-inner">
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="bg-secondary" data-aos="fade-left">
  <hr>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" data-aos="fade-left">
        <img src="{{url('asset/tent.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tenda</h5>
          <p class="card-text">Kami memiliki Tenda berkualitas tinggi, anti badai dan bocor.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" data-aos="fade-left">
        <img src="{{url('asset/chair.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kursi Lipat</h5>
          <p class="card-text">Kursi lipat dengan gaya estetik, membuat liburanmu lebih kekinian.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" data-aos="fade-left">
        <img src="{{url('asset/hammock.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hammock</h5>
          <p class="card-text">Hammock yang kami sewakan sudah berstandar Internasional, cocok untuk bersantai menikmati alam</p>
        </div>
      </div>
    </div>
</div>

<div class="bg-secondary" data-aos="fade-left">
    <hr>
</div>

<script src="{{url('js/script.js')}}"></script>

@endsection