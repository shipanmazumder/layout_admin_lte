  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route("dashboard")}}" class="brand-link">
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
            <a href="{{route("dashboard")}}" class="nav-link {{set_Submenu("dashboard")}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
          </li>
          @if (hasActive("administrator") && hasPermission("administrator",VIEW))
            <li class="nav-item has-treeview {{set_Topmenu('administrator')}}">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Administrator
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        @if (is_super_admin())
                        <a href="{{route('module')}}" class="nav-link {{set_Submenu('module')}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Module</p>
                        </a>
                        @endif
                        @if (hasPermission("role_permission",VIEW))
                            <a href="{{route('role')}}" class="nav-link {{set_Submenu('role-permission')}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Role Permission</p>
                            </a>
                        @endif
                        @if (hasPermission("manage_user",VIEW))
                            <a href="{{route('users')}}" class="nav-link {{set_Submenu('manage-user')}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Users</p>
                            </a>
                        @endif
                    </li>
                </ul>
            </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
