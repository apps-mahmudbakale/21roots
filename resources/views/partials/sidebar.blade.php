  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @can('read-users') 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-lock"></i><span>Authentication</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="nav-item">
            <a href="{{route('admin.users.index')}}">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.roles.index')}}">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      @endcan
      @can('read-projects')
       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.projects.index')}}">
          <i class="bi bi-briefcase"></i>
          <span>Projects</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endcan
      @can('read-products')
       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.products.index')}}">
          <i class="bi bi-gift"></i>
          <span>Products</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endcan
      @can('read-services')
       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.services.index')}}">
          <i class="bi bi-collection"></i>
          <span>Services</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endcan
    </ul>

  </aside><!-- End Sidebar-->