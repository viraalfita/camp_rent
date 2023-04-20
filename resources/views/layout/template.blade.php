<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camp Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
  </head>
  
  <body class="bg-light">
    <nav class="navbar navbar-light bg-green font fixed-top">
      <div class="container-fluid">
        <a class="row navbar-brand" href="#">
          <img src="{{url('asset/icon.svg')}}" alt="..." class="col" style="height: 36px">
          <span class="col text-light" style="font-size: 24px;">Camp Rent</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <i class="ri-align-justify text-light" style="font-size: 28px"></i>
        </button>
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-body bg-green">
            <ul class="navbar-nav font justify-content-end flex-grow-1 pe-3">
              <li>
                <h4 class="text-center text-light">CAMP-RENT</h4>
              </li>
              <li>
                <hr class="mb-0">
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex" aria-current="page" href="{{url('/dashboard')}}">
                  <i class="ri-home-3-line" style="font-size: 24px"></i>
                  <span class="my-auto mx-3">Dashboard</span>
                </a>
              </li>
              <li>
                <hr class="mt-0 mb-0">
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex" href="{{url('/list_harga')}}">
                  <i class="ri-price-tag-3-line" style="font-size: 24px"></i>
                  <span class="my-auto mx-3">List Harga</span>
                </a>
              </li>
              <li>
                <hr class="mt-0 mb-0">
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex" aria-current="page" href="{{url('/booking')}}">
                  <i class="ri-luggage-cart-line" style="font-size: 24px"></i>
                  <span class="my-auto mx-3">Booking</span>
                </a>
              </li>
              <li>
                <hr class="mt-0 mb-0">
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex" aria-current="page" href="{{url('/persyaratan')}}">
                  <i class="ri-file-list-3-line" style="font-size: 24px"></i>
                  <span class="my-auto mx-3">Persyaratan</span>
                </a>
              </li>
              <li class="<?= auth()->user()->is_admin == 1 ?'' :'d-none'?>">
                <hr class="mb-0 mt-0">
              </li>
              <li class="nav-item <?= auth()->user()->is_admin == 1 ?'' :'d-none'?>">
                <a class="nav-link d-flex" href="{{url('/barang')}}">
                  <i class="ri-archive-drawer-line" style="font-size: 24px"></i>
                  <span class="my-auto mx-3">Data Barang</span>
                </a>
              </li>
              <li class="<?= auth()->user()->is_admin == 1 ?'' :'d-none'?>">
                <hr class="mt-0 mb-0">
              </li>
              <li class="nav-item <?= auth()->user()->is_admin == 1 ?'' :'d-none'?>">
                <a class="nav-link d-flex" href="{{url('/penyewa')}}">
                  <i class="ri-user-5-line" style="font-size: 24px"></i>
                  <span class="my-auto mx-3">Data Penyewa</span>
                </a>
              </li>
              <li>
                <hr class="mt-0 mb-0">
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex" href="{{url('/logout')}}">
                  <i class="ri-logout-box-r-line" style="font-size: 24px"></i>
                  <span class="my-auto mx-3">Logout</span>
                </a>
              </li>
              <li>
                <hr class="mt-0 mb-0">
              </li>
          </div>
        </div>
      </div>
    </nav>
    @include('component/message')
    @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
  <div class="d-flex flex-column h-100 bg-green">
    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-5 col-md-6">
                    <h2 class="font text-light mb-3">HUBUNGI KAMI</h2>
                    <ul class="list-unstyled text-muted">
                        <li>
                          <a href="https://www.instagram.com/solikain_/" class="d-flex text-decoration-none text-gray">
                            <i class="ri-instagram-line" style="font-size: 24px"></i>
                            <span class="my-auto mx-3">@camp-rent</span>
                          </a>
                        </li>
                        <li>
                          <a class="d-flex text-decoration-none text-gray">
                            <i class="ri-whatsapp-line" style="font-size: 24px"></i>
                            <span class="my-auto mx-3">(+62) 877-9090-0196</span>
                          </a>
                        </li>
                        <li>
                          <a class="d-flex text-decoration-none text-gray">
                            <i class="ri-map-pin-line" style="font-size : 24px"></i>
                            <span class="my-auto mx-3">Jl. Comboran No.23</span>
                          </a>
                        </li>
                        <li>
                          <a class="d-flex text-decoration-none text-gray">
                            <i class="ri-mail-open-line" style="font-size : 24px"></i>
                            <span class="my-auto mx-3">camprent@gmail.com</span>
                          </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p class="text-gray">Copyright camp-rent © 2023. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
    </footer>
</div>
</html>