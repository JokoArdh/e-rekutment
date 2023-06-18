@extends('layouts.mainf')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Services</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          @foreach ($service as $item)

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="{{ $item->icon }}"></i>
              </div>
              <h3>{{ $item->title }}</h3>
              <p>{!! $item->deskripsi !!}</p>
            </div>
          </div><!-- End Service Item -->
              
          @endforeach
          
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Servie Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          @foreach ($produk as $item)
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <h3>{{ $item->name }}</h3>
            <p>{!! $item->deskripsi !!}</p>
          </div><!-- End feature item-->
          @endforeach
  

        </div>

      </div>
    </section><!-- End Servie Cards Section -->

   
   
  </main><!-- End #main -->

@endsection