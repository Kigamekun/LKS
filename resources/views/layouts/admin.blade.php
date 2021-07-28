<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminDashboard</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="{{ url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/fonts/dropify.ttf">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
    integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<style>
  :root {
    --bg: #e3e4e8;
    --fg: #17181c;
    --c1: #f42f25;
    --c2: #f49725;
    --c3: #255ff4;
    --c4: #9725f4;

  }

  .pl1,
  .pl2 {
    justify-content: space-around;
  }

  .pl1__a,
  .pl1__b,
  .pl1__c,
  .pl2__a,
  .pl2__b,
  .pl2__c {
    border-radius: 50%;
    width: 1em;
    height: 1em;
    transform-origin: 50% 100%;
  }

  .pl1__a,
  .pl1__b,
  .pl1__c {
    animation: bounce1 1s linear infinite;
  }

  .pl2__a,
  .pl2__b,
  .pl2__c {
    animation: bounce2 2s linear infinite;
  }

  .pl3,
  .pl4 {
    justify-content: space-between;
  }

  .pl3__a,
  .pl3__b,
  .pl3__c,
  .pl3__d,
  .pl4__a,
  .pl4__b,
  .pl4__c,
  .pl4__d {
    width: 0.75em;
    height: 0.75em;
  }

  .pl3__a,
  .pl3__b,
  .pl3__c,
  .pl3__d {
    animation: bounce3 2s ease-in-out infinite;
    transform-origin: 50% 0;
  }

  .pl4 {
    align-items: flex-end;
  }

  .pl4__a,
  .pl4__b,
  .pl4__c,
  .pl4__d {
    animation: bounce4 2s linear infinite;
    transform-origin: 50% 100%;
  }

  .pl1,
  .pl2,
  .pl3,
  .pl4 {
    display: flex;
    margin: 1.5em;
    width: 6em;
    height: 6em;
  }

  .pl1__a,
  .pl2__a,
  .pl3__a,
  .pl4__a {
    background: var(--c1);
  }

  .pl1__b,
  .pl2__b,
  .pl3__b,
  .pl4__b {
    background: var(--c2);
    animation-delay: 0.1s;
  }

  .pl1__c,
  .pl2__c,
  .pl3__c,
  .pl4__c {
    background: var(--c3);
    animation-delay: 0.2s;
  }

  .pl3__d,
  .pl4__d {
    background: var(--c4);
    animation-delay: 0.3s;
  }

  /* Animations */
  @keyframes bounce1 {

    from,
    to {
      transform: translateY(0) scale(1, 1);
      animation-timing-function: ease-in;
    }

    45% {
      transform: translateY(5em) scale(1, 1);
      animation-timing-function: linear;
    }

    50% {
      transform: translateY(5em) scale(1.5, 0.5);
      animation-timing-function: linear;
    }

    55% {
      transform: translateY(5em) scale(1, 1);
      animation-timing-function: ease-out;
    }
  }

  @keyframes bounce2 {

    from,
    to {
      transform: translateY(0) scale(1, 1);
      animation-timing-function: ease-in;
    }

    9%,
    29%,
    49%,
    69% {
      transform: translateY(5em) scale(1, 1);
      animation-timing-function: linear;
    }

    10% {
      transform: translateY(5em) scale(1.5, 0.5);
      animation-timing-function: linear;
    }

    11%,
    31%,
    51%,
    71%,
    91% {
      transform: translateY(5em) scale(1, 1);
      animation-timing-function: ease-out;
    }

    20% {
      transform: translateY(2.5em) scale(1, 1);
      animation-timing-function: ease-in;
    }

    30% {
      transform: translateY(5em) scale(1.25, 0.75);
      animation-timing-function: linear;
    }

    40% {
      transform: translateY(3.75em) scale(1, 1);
      animation-timing-function: ease-in;
    }

    50% {
      transform: translateY(5em) scale(1.125, 0.875);
      animation-timing-function: linear;
    }

    60% {
      transform: translateY(4.375em) scale(1, 1);
      animation-timing-function: ease-in;
    }

    70% {
      transform: translateY(5em) scale(1.0625, 0.9375);
      animation-timing-function: linear;
    }

    85% {
      transform: translateY(5em) scale(1, 1);
      animation-timing-function: ease-in;
    }

    90% {
      transform: translateY(5em) scale(1.875, 0.125);
      animation-timing-function: ease-in-out;
    }
  }

  @keyframes bounce3 {

    from,
    5%,
    95%,
    to {
      transform: translateY(0) scaleY(1);
    }

    16.7% {
      transform: translateY(0) scaleY(8);
    }

    28.3%,
    38.3% {
      transform: translateY(5.25em) scaleY(1);
    }

    50% {
      transform: translateY(2.625em) scaleY(4.5);
    }

    61.7%,
    71.7% {
      transform: translateY(2.625em) scaleY(1);
    }

    83.3% {
      transform: translateY(0) scaleY(4.5);
    }
  }

  @keyframes bounce4 {

    from,
    20%,
    40%,
    60%,
    80%,
    to {
      transform: scaleY(1);
      animation-timing-function: ease-out;
    }

    10% {
      transform: scaleY(8);
      animation-timing-function: ease-in;
    }

    30% {
      transform: scaleY(4);
      animation-timing-function: ease-in;
    }

    50% {
      transform: scaleY(2);
      animation-timing-function: ease-in;
    }

    70% {
      transform: scaleY(1.5);
      animation-timing-function: ease-in;
    }
  }

  /* Dark theme */
  @media (prefers-color-scheme: dark) {
    :root {
      --bg: #17181c;
      --fg: #e3e4e8;
    }
  }

  .dropify-wrapper .dropify-message span.file-icon {
    font-size: 30px;
  }
</style>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">


      <div class="pl3">
        <div class="pl3__a"></div>
        <div class="pl3__b"></div>
        <div class="pl3__c"></div>
        <div class="pl3__d"></div>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
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

        <!-- Messages Dropdown Menu -->

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
      <ul class="navbar-nav ml-auto">
      @guest
      @if (Route::has('login'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
      @endif

      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->nama }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
  @endguest
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <center>
        <h3 class="text-white m-auto">KigaShop</h3>
      </center>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


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
              <a href="{{ route('produk.index') }}" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                  Produk
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('transaksi.index') }}" class="nav-link">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                  Transaksi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="kategori/" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Kategori
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
      @if(session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text">{{ session('status') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <br>

      @endif



      @yield('content')





      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->




  






    <!-- jQuery -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ url('assets/dist/js/adminlte.js') }}"></script>


    <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>

    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
      integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $('.dropify').dropify();
    </script>


    <script>
      $('#upload').submit(function (e) {

        e.preventDefault();
        // var formData = new FormData(this);
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          url: '/produk',
          type: 'POST',
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,

          success: function (data) {
            window.location.reload();
          }
        });


      });


      $('#transaksi').submit(function (e) {

        e.preventDefault();
        // var formData = new FormData(this);
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          url: '/transaksi_store',
          type: 'POST',
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,

          success: function (data) {
            window.location.reload();
          }
        });


      });


      $('#kategori').submit(function (e) {

        e.preventDefault();
        // var formData = new FormData(this);
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          url: '/kategori/store',
          type: 'POST',
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,

          success: function (data) {
            window.location.reload();
          }
        });


      });




      $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
          title: 'Are you sure?',
          text: 'This record and it`s details will be permanantly deleted!',
          icon: 'warning',
          buttons: ["Cancel", "Yes!"],
        }).then(function (value) {
          if (value) {
            window.location.href = url;
          }
        });
      });
    </script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
</body>

</html>