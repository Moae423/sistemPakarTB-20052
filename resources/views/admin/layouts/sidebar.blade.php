<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SISTEM PAKAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user7-128x128.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        @auth
        <div class="info">
          <a href="#" class="d-block">Dr. {{ auth()->user()->nama }}</a>
        </div>
        @endauth
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/penyakit/create" class="nav-link {{ Request::is('/admin/penyakit/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penyakit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gejala/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Gejala</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/rule/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rule</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="/admin/penyakit/show" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports Data Penyakit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gejala/show" class="nav-link {{ Request::is('/admin/gejala/show') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports Data Gejala</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftar/show" class="nav-link {{ Request::is('/daftar/show') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/rule/show" class="nav-link {{ Request::is('/daftar/show') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports Data Rule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/hasil" class="nav-link {{ Request::is('/register/show') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports Data Konsultasi </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>