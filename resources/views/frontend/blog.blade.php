@extends('layouts.mainf')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Blog</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Blog</li>
        </ol>
        <b style="color: aliceblue">untuk melamar silahkan daftar akun kamudian login</b>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 posts-list">

          @foreach ($post as $item)
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{ $item->title }}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">{{ $item->bagian }}</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">{{ $item->jamkerja }}</span>
                  </div>
                </div>

                <p>
                  {{ $item->excerpt }}
                </p>

                <hr>
              </div>

            </div>
          </div><!-- End post list item -->

        @endforeach
        </div><!-- End blog posts list -->
      </div>
    </section><!-- End Blog Section -->
    {{ $post->links() }}
  </main><!-- End #main -->

@endsection