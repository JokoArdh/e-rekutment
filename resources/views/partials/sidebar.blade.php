<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      @can('isAdmin')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fas-solid fa-folder"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Data Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              {{-- <li class="nav-item">
                <a href="/admin/slider" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Slider</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="/admin/about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/jenis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jenis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/service" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/post" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Loker</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/akun" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Akun</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/pelamar" class="nav-link">
              <i class="nav-icon fas fas-solid fa-folder"></i>
              <p>Data Pelamar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/terima" class="nav-link">
              <i class="nav-icon fas fas-solid fa-folder"></i>
              <p>Data Diterima</p>
            </a>
          </li>
          
      @elsecan('isHrd')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/hrd" class="nav-link">
              <i class="nav-icon fas fas-solid fa-folder"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Data Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="/hrd/loker" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Loker</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/hrd/pencaker" class="nav-link">
              <i class="nav-icon fas fas-solid fa-folder"></i>
              <p>Data Pelamar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/hrd/terima" class="nav-link">
              <i class="nav-icon fas fas-solid fa-folder"></i>
              <p>Data Diterima</p>
            </a>
          </li>
      @endcan
      <!-- Sidebar Menu -->
     
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
                <button type="submit" class="nav-link"><i class="nav-icon fas fa-arrow-left"></i>Logout</button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>