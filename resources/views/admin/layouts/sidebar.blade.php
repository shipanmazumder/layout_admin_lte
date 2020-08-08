  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route("admin.dashboard")}}" class="brand-link">
      <img src="{{asset("admin")}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{config("app.name")}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset("admin")}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route("admin.dashboard")}}" class="nav-link {{set_Submenu("dashboard")}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route("admin.area")}}" class="nav-link {{set_Submenu("area")}}">
                <i class="nav-icon fas fa-map"></i>
                <p>
                    Area
                </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{set_Topmenu("event")}}">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Event
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route("admin.event")}}" class="nav-link {{set_Submenu("manage_event")}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Event</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route("admin.user")}}" class="nav-link {{set_Submenu("user")}}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Users Registration
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route("admin.sortlist")}}" class="nav-link {{set_Submenu("sort_list")}}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Sort List Users
                </p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
