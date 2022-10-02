<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/dist/img/refadesi.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Refa Desi Deria</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="admin/profile" class="nav-link {{ Request::is('admin/') ? 'active' : '' }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/about" class="nav-link {{ Request::is('about  ') ? 'active' : '' }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>About</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('genre.index') }}" class="nav-link {{ request()->is('admin/genre') ? 'active' : '' }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Genre Film</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('tahun_rilis.index') }}" class="nav-link {{ Request::is('admin/tahun_rilis') ? 'active' : '' }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tahun Rilis</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('casting.index') }}" class="nav-link {{ Request::is('admin/casting') ? 'active' : '' }}" class="nav-link">
                <i class="far fa-circle -navicon"></i>
                <p>Casting</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('movie.index') }}" class="nav-link {{ Request::is('admin/movie') ? 'active' : '' }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Movie</p>
              </a>
            </li>
            
            
           
              </a>
            </li>
          </ul>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>