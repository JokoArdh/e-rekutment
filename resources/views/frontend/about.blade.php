@extends('layouts.mainf')

@section('container')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      @foreach ($about as $item)
          
      <div class="container" data-aos="fade-up">
        <div class="row position-relative">
          <div class="col-lg-7 about-img" style="background-image: url('image/image2.jpg');"></div>
          <div class="col-lg-7">
            <h3>{{ $item->title }}</h3>
            <div class="our-story">
              <h4>Est {{ $item->tahun }}</h4>
              <h4>Our Story</h4>
              <p>{!! $item->deskripsi !!}</p>
            </div>
          </div>
        </div>
     @endforeach
      </div>
    </section>
    <!-- End About Section -->


   
  </main><!-- End #main -->

    
@endsection