  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background-color:#dddddd">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
      <img src="{{asset('assets/img/placeholder.png')}}" alt="A" class="brand-image  " style="opacity: .8">
      <span class="brand-text font-weight-medium" style="color:#3ED2A2 ">YourTour</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('assets/img/icon.png')}}" class="img-circle elevation-2" alt="U">
        </div>
        <div class="info">
            <a href="#" class="d-block">
                {{ Auth::user()->name }}
        </a>
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
                    <a href="{{route('admin.index')}}" class="nav-link @yield('Dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                  <a href="{{route('admin.show.admin')}}" class="nav-link  @yield('Profile')">
                    <i class="nav-icon fa-solid fa-address-card"></i>
                    <p>
                      Admin
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.users.index')}}" class="nav-link  @yield('User')">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            User
                            {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.categories.index')}}" class="nav-link  @yield('Category')">
              <i class="nav-icon fa-solid fa-clipboard-list"></i>
              <p>
                Category
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.trips.index')}}" class="nav-link  @yield('Trips')">
              <i class="nav-icon fa-solid fa-plane-departure"></i>
              <p><i class=""></i>
                Trips
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.reservation.index')}}" class="nav-link  @yield('Reservations')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Reservations
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('user.contact.show')}}" class="nav-link  @yield('message')">
              <i class="nav-icon fa-solid fa-message"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">

              <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
              <p class="text">logout</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
