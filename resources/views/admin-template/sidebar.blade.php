<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">{{ App\Sites::first()->sitename }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="@yield('activedashboard')"><a class="nav-link" href="{{ route('webmanager') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
      </li>
      <li class="menu-header">Articles</li>
      <li class="dropdown @yield('activeposts')">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Posts</span></a>
        <ul class="dropdown-menu">
          <li class="@yield('active_p_new')"><a class="nav-link" href="{{ route('webmanager.posts.create') }}">New Posts</a></li>
          <li class="@yield('active_p_lists')"><a class="nav-link" href="{{ route('webmanager.posts.index') }}">Lists</a></li>
          <li class="@yield('active_p_archived')"><a class="nav-link" href="{{ route('webmanager.posts.archived') }}">Archived</a></li>
        </ul>
      </li>
      @if(Auth::user()->level == 1)
      <li class="dropdown @yield('activecategories')">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Category</span></a>
        <ul class="dropdown-menu">
          <li class="@yield('active_c_add')"><a class="nav-link" href="{{ route('webmanager.categories.create') }}">Add Category</a></li>
          <li class="@yield('active_c_lists')"><a class="nav-link" href="{{ route('webmanager.categories.index') }}">Lists</a></li>
        </ul>
      </li>
      <li class="dropdown @yield('activetags')">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bookmark"></i><span>Tags</span></a>
        <ul class="dropdown-menu">
          <li class="@yield('active_t_add')"><a class="nav-link" href="{{ route('webmanager.tags.create') }}">Add Tags</a></li>
          <li class="@yield('active_t_lists')"><a class="nav-link" href="{{ route('webmanager.tags.index') }}">Lists</a></li>
        </ul>
      </li>
      @endif
      <li class="menu-header">Settings</li>
      @if(Auth::user()->level == 1)
      <li class="dropdown @yield('activeaccounts')">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users-cog"></i><span>Accounts</span></a>
        <ul class="dropdown-menu">
          <li class="@yield('active_a_create')"><a class="nav-link" href="{{ route('webmanager.users.index') }}">Create</a></li>
          <li @yield('active_a_lists')><a class="nav-link" href="{{ route('webmanager.users.index') }}">Lists</a></li>
        </ul>
      </li>
      @endif
      <li class="@yield('activeprofile')"><a class="nav-link" href="{{ route('webmanager.profiles.index') }}"><i class="fas fa-user-cog"></i> <span>Profile</span></a>
      </li>
      @if(Auth::user()->level == 1)
      <li class="@yield('activeconfigurations')"><a class="nav-link" href="{{ route('webmanager.sites.index') }}"><i class="fas fa-sliders-h"></i> <span>Site Configurations</span></a>
      </li>
      @endif
    </ul>
  </aside>
</div>