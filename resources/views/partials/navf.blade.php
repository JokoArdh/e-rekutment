 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>PT.BWK Indomandiri Lestari<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ ($title == "Bussiness PT.BWK Indomandiri Lestari") ? 'active' : '' }}" href="/">Home</a></li>
          <li><a href="/about" class="{{ ($title == "About") ? 'active' : '' }}">About</a></li>
          <li><a href="/service" class="{{ ($title == "Service") ? 'active' : '' }}">Services</a></li>
          <li><a href="/galery" class="{{ ($title == "Galery") ? 'active' : '' }}">Galery</a></li>
          <li><a href="/blog" class="{{ ($title == "Loker") ? 'active' : '' }}">Loker</a></li>
          <li><a href="/kontak" class="{{ ($title == "Contact") ? 'active' : '' }}">Contact</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->