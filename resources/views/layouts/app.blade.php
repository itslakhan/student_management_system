<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Management System </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" type="{{ asset('image/png') }}" href="{{ asset('assets/images/logos/favicon.png') }}"/>
<link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }} " />
</head>

<body>
  <!--  Body Wrapper -->



    <!-- Sidebar Start -->
      <x-sidebar />
    <!--  Sidebar End -->


    <!--  Main wrapper -->




      {{-- <!--  Header Start -->
          <x-header />
      <!--  Header End --> --}}

      @yield('content')
      
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  @stack('ajax-scripts')
</body>

</html>