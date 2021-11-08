<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SILOLAVAIR || PAA</title>
  <!-- base:css -->
  <link rel="stylesheet" href="dashboard/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="dashboard/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="dashboard/css/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="dashboard/images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
      <!-- partial:./partials/_sidebar.html -->
      {{-- Untuk Slidebar --}}
      @include('paa.slidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_navbar.html -->
      {{-- Untuk Navbar --}}
      @include('paa.navbar')
          <!-- partial -->
          <div class="main-panel">
            {{-- ini untuk isi --}}
            @yield('container')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="dashboard/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="dashboard/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="dashboard/js/off-canvas.js"></script>
  <script src="dashboard/js/hoverable-collapse.js"></script>
  <script src="dashboard/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="dashboard/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
