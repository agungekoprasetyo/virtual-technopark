<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Virtual Technopark</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
  

  @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-2 text-sm">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Virtual Technopark</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
            <a href="{{ url('/adminpanel') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         
          </li>
          <li class="nav-header">Technopark Menu</li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/technopark') }}" class="nav-link">
              <i class="nav-icon fas fa-city"></i>
              <p>Technopark</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/startup') }}" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>Startup</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{ url('/adminpanel/komunitas') }}" class="nav-link">
              <i class="nav-icon fas fa-object-group"></i>
              <p>Asosiasi/Komunitas</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{ url('/adminpanel') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>Event/Selesai</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{ url('/adminpanel') }}" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>Dev/Peserta</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{ url('/adminpanel') }}" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>Join Virtual Technopark</p>
            </a>
          </li> 
          
          <li class="nav-header">Admin Menu</li>

          <li class="nav-item">
            <a href="{{ url('/adminpanel/allusers') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>All Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/beranda') }}" class="nav-link">
              <i class="nav-icon fas fa-square"></i>
              <p>Beranda Depan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/virtualtp') }}" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>Virtual TP</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Menu Page</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Post News</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>Post Event</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>Post Menu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fa fa-images"></i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fa fa-comment"></i>
              <p>Komen Post</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fa fa-cogs"></i>
              <p>Pengaturan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/adminpanel/menupage') }}" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>Panduan Online</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>Keluar</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
      
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('titlebreadcrumb')
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">Virtual TECHNOPARK</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/js/adminlte.min.js')}}"></script>
@yield('javascripts')

</body>
</html>
