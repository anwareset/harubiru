    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link @yield('activehome')" href="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Articles
      </div>

      <!-- Nav Item - Posts Collapse Menu -->
      <li class="nav-item @yield('activeposts')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts" aria-expanded="true" aria-controls="collapsePosts">
          <i class="fas fa-fw fa-cog"></i>
          <span>Posts</span>
        </a>
        <div id="collapsePosts" class="collapse" aria-labelledby="headingPosts" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Posts Menu</h6>
            <a class="collapse-item" href="{{ route('posts.create') }}">Create</a>
            <a class="collapse-item" href="{{ route('posts.index') }}">List</a>
            <a class="collapse-item" href="{{ route('posts.index') }}">Archived</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Categories Collapse Menu -->
      <li class="nav-item @yield('activecategories')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="true" aria-controls="collapseCategories">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Category</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingCategories" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="{{ route('categories.create') }}">Create</a>
            <a class="collapse-item" href="{{ route('categories.index') }}">List</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tags Collapse Menu -->
      <li class="nav-item @yield('activetags')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTags" aria-expanded="true" aria-controls="collapseTags">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Tags</span>
        </a>
        <div id="collapseTags" class="collapse" aria-labelledby="headingTags" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="{{ route('tags.create') }}">Create</a>
            <a class="collapse-item" href="{{ route('tags.create') }}">List</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Advanced Settings
      </div>

      <!-- Nav Item - Accounts Collapse Menu -->
      <li class="nav-item @yield('activeaccounts')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAccounts" aria-expanded="true" aria-controls="collapseAccounts">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Accounts</span>
        </a>
        <div id="collapseAccounts" class="collapse" aria-labelledby="headingAccounts" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="">Create</a>
            <a class="collapse-item" href="">List</a>
          </div>
        </div>
      </li>

      <!-- Manage Profile -->
      <li class="nav-item @yield('activemanageprofile')">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Manage Profile</span></a>
      </li>

      <!-- Nav Item - Site Configurations -->
      <li class="nav-item @yield('siteonfigurations')">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Site Configurations</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>