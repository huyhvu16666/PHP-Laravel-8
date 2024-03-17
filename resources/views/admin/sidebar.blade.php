<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset("public/teamplate/admin/index3.html")}}" class="brand-link">
      <img src="{{asset("public/teamplate/admin/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset("public/teamplate/admin/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">huyhvu1666</a>
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-list"></i>
              <p>
                Danh Mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('menu.add')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('menu.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách danh mục</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-store-alt"></i>
                <p> Sản Phẩm
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('product.add')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm Sản Phẩm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('product.list')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh Sách Sản Phẩm</p>
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
  {{-- <li 
                        class="treeview {{ request()->routeIs('banner.index') || request()->routeIs('banner.create') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-image"></i>
                            <span>Banners</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ request()->routeIs('banner.index') ? 'active' : '' }}"><a
                                    href="{{ route('banner.index') }}"><i class="fa fa-circle-o"></i>List</a></li>
                            <li class="{{ request()->routeIs('banner.create') ? 'active' : '' }}"><a
                                    href="{{ route('banner.create') }}"><i class="fa fa-circle-o"></i>Create</a>
                            </li>
                        </ul>
                    </li>--}}