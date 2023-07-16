@extends('layouts.mainf')

@section('container')

<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Welcome to <span>PT.BWK Indomandiri Lestari</span></h2>
          <p data-aos="fade-up">Manufacturer <br>Opening at 6:45 AM tomorrow</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
  </div>

  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/ptbwk.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/sewing.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/image1.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/image2.jpg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/tas\.jpg)"></div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section><!-- End Hero Section -->

<main id="main">


  <!-- ======= Constructions Section ======= -->
  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Departemen</h2>
        <p>Departemen PT BWK INDOMANDIRI LESTARI</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url(assets/img/cutting.jpeg);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Cutting.</h4>
                  <p>Dpeartemen yang bergerak dibidang pemotongan bahan baku produksi, pembuatan pola , jadibarang yang sudah dipotong sesuai style akan diinput dan disalurkan ke line lewat adm produksi</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url(assets/img/gudang.jpg);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Gudang</h4>
                  <p>Bagian tempat dimana barang di stok mulai dari bahan baku dan aksesoris. departeman ini berfokus pada  persediaan barang dan pemeliharaan bahan baku </p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url(assets/img/sewing.jpg);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Sewing</h4>
                  <p>Sewing atau departemen produksi merupakan departemen yang melakukan pembuatan bahan baku menjadi barang yang berkualitas di departemen ini sangatlah dibutuhkan skill yang handal dan ketekunan dan keuletan</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url(assets/img/packing.jpg);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Finishing</h4>
                  <p>Departemen yang melakukan checking dan packing departemen ini terdiri dari quality kontrol bertuggas untuk mengecek kualitas dan packing malakukan packing barang untuk dikirim.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section><!-- End Constructions Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Services</h2>
        <p>Kelebihan Produk Jaminan Garansi dan Pelayanan kami </p>
      </div>

      <div class="row gy-4">

        @foreach ($service as $item)

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="{{ $item->icon }}"></i>
              </div>
              <h3>{{ $item->title }}</h3>
              <p>{!! $item->deskripsi  !!}</p>
            </div>
          </div><!-- End Service Item -->
              
          @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Alt Services Section ======= -->
  <section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Support Motto Kerja</h3>
          <p>Lingkungan dan budaya kerja </p>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-easel flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Lingkungan Nyaman</a></h4>
              <p>Budaya lingkungan yang nyaman dengan kekeluargaan</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">100-1=0</a></h4>
              <p>Produk yang lengkap siap kirim, jika terjadi kekurangan 1 maka mempengaruhi proses pengiriman</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Kekompakan Tim</a></h4>
              <p>Menciptakan kerjasama tim dalam produksi agar mencapai targat dan menciptakan kerukunan sesama pekerja</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Kualitas</a></h4>
              <p>Cek Kualitas lebih utama meliputi proses quality controll hingga finishing</p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>

    </div>
  </section><!-- End Alt Services Section -->

</main><!-- End #main -->
    
@endsection