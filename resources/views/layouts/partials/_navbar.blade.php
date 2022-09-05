<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('property.index') }}" class="nav-link">Properties List</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('property.create') }}" class="nav-link">Sell Property</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name ?? ''}}</a>
        </div>
      </div>
    </ul>  
  </nav>
  <!-- /.navbar -->