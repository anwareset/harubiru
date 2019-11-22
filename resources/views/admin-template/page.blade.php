<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('admin-template.header')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <!-- Topbar -->
      @include('admin-template.topbar')

      <!-- Sidebar -->
      @include('admin-template.sidebar')

      <!-- Main Content -->
      @yield('content')

      <!-- Footer -->
      @include('admin-template.footer')

    </div>
  </div>

  <!-- JavaScript -->
  @include('admin-template.js')

</body>
</html>