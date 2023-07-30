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
      @can('read-jobs')
       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.jobs.index')}}">
          <i class="bi bi-briefcase"></i>
          <span>Jobs</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endcan
      @can('read-recruites')
       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.recruites.index')}}">
          <i class="bi bi-people"></i>
          <span>Recruites</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endcan
      @can('read-users')
       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.questions.index')}}">
          <i class="bi bi-book"></i>
          <span>Interview Questions</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endcan
      @can('read-documents')
       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.documents.index')}}">
          <i class="bi bi-card-text"></i>
          <span>Documents</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @endcan
    </ul>

  </aside><!-- End Sidebar-->