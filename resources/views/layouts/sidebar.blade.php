

    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="logo/logo_pelindo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="logo/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
               

          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/data')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Entri Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/grafik_bar')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Grafik Bar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/grafik_line')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Grafik Line</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->