<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SILOLAVAIR</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="landing/public/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="landing/public/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="landing/public/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="landing/public/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="landing/public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="landing/public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="landing/public/assets/css/theme.css" rel="stylesheet" />
    

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

    {{-- ini untuk navbar --}}
    @include('mhs.navbar')
      <!-- ============================================-->
      
    {{-- ini untuk isi --}}
    @yield('container')




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="landing/public/vendors/@popperjs/popper.min.js"></script>
    <script src="landing/public/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="landing/public/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="landing/public/vendors/fontawesome/all.min.js"></script>
    <script src="landing/public/assets/js/theme.js"></script>

    

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>