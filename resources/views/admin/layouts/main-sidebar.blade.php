  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 container-fluid" style="background-color:#051922; height: 104%">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
      <img src="{{asset('assets/img/mp_logo.png')}}" alt="logo" class="" style="height:80px; width:180px">
      {{-- <span class="brand-text font-weight-medium" style="color:#3ED2A2 ">YourTour</span> --}}
    </a>

    

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
                      Admins
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.users.index')}}" class="nav-link  @yield('User')">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            Users
                            {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.categories.index')}}" class="nav-link  @yield('Category')">
              <i class="nav-icon fa-solid fa-clipboard-list"></i>
              <p>
                Categories
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.products.index')}}" class="nav-link  @yield('products')">
              <i class="nav-icon fa-solid fa-sharp fa-regular fa-cart-shopping"></i>
              <p><i class=""></i>
                Products
                {{-- <span class="right badge badge-danger">user</span> --}}
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{route('admin.order.index')}}" class="nav-link  @yield('orders')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Orders
                <span class="right badge badge-danger">user</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{route('admin.contact.show')}}" class="nav-link  @yield('message')">
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
