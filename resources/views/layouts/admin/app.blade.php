<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="images/png" href="{{asset('images/favicon.ico')}}">
    {{-- <link rel="icon" href="{{ asset('images/favicon.jpg') }}" type="image/x-icon"/> --}}
  <title>Admin | Bryan Venancio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.min.css') }}">
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}"> --}}
</head>
<body class="hold-transition sidebar-mini">
  @if(Session::has('message'))
    <div class="modal" id="modalMessage">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Message Box</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <h6>
               {{Session::get('message')}}
               {{Session::forget('message')}} 
            </h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endif
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="bg-white">
      <img src="{{ asset('images/logo.jpg') }}" class="img-fluid bg-white" width="100%">
      {{-- <span class="brand-text font-weight-light"></span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link {{ Request::is('home') ? 'active' : null}}">
              <i class="fas fa-tachometer-alt mr-2"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ url('Admin/User') }}" class="nav-link {{ Request::is('Admin/User') ? 'active' : null}}">
              <i class="fas fa-users mr-2"></i>
              <p>
                Users
              </p>
            </a>
          </li> --}}
          
          <li class="nav-item has-treeview">
            <a href="{{ url('Admin/Portfolio') }}" class="nav-link {{ Request::is('Admin/Portfolio') ? 'active' : null }}">
              <i class="fas fa-table mr-2"></i>
              <p>
                Portfolio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('Admin/Portfolio_category') }}" class="nav-link {{  Request::is('Admin/Portfolio_category') ? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Admin/Portfolio') }}" class="nav-link {{  Request::is('Admin/Portfolio') ? 'active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolio</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ url('Admin/Header') }}" class="nav-link {{ Request::is('Admin/Header') ? 'active' : null}}">
              <i class="fas fa-image mr-2"></i>
              <p>
                Header
              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview">
            <a href="{{ url('Admin/Blog') }}" class="nav-link {{ Request::is('Admin/Blog') ? 'active' : null }}">
              <i class="fas fa-newspaper mr-2"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ url('Admin/Comment') }}" class="nav-link {{ Request::is('Admin/Comment') ? 'active' : null }}">
              <i class="fas fa-comment mr-2"></i>
              <p>
                Blog Comments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('Admin/blog_tags') }}" class="nav-link {{  Request::is('Admin/blog_tags') ? 'active' : null }}">
              <i class="fas fa-tags"></i>
              <p>Tags</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('Admin/Slider') }}" class="nav-link {{ Request::is('Admin/Slider') ? 'active' : null}}">
              <i class="fas fa-images mr-2"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('Admin/Logo') }}" class="nav-link {{ Request::is('Admin/Logo') ? 'active' : null}}">
              <i class="fas fa-images mr-2"></i>
              <p>
                Logo
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ url('Admin/Contact') }}" class="nav-link {{ Request::is('Admin/Contact') ? 'active' : null}}">
              <i class="fas fa-user-plus mr-2"></i>
              <p>
                Contacts
              </p>
            </a>
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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            {{-- <h1>Admin Dashboard</h1> --}}
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ url('/home') }}">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @if(Session::has('alert'))
        <div class="col-xl-12">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">
                Warning! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </h5>
            <p class="mb-0">
              {{ Session::get('alert') }}
                {{ Session::forget('alert') }}
            </p>
          </div>
        </div>
      @elseif(Session::has('success'))
        <div class="col-xl-12">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">
                Success! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </h5>
            <p class="mb-0">
              {{ Session::get('success') }}
                {{ Session::forget('success') }}
            </p>
          </div>
        </div>
      @endif
      @yield('content')
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
  <script src="{{ asset('js/admin.min.js') }}"></script>
    {{-- <script src="{{ asset('js/select2.min.js') }}"></script> --}}
  <script type="text/javascript">
    $(window).on('load', function() {
        $('#modalMessage').modal('show');
    });
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
  </script>
  @yield('js')
</body>
</html>
