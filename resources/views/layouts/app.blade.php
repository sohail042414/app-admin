<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Mantis Dashboard</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework.">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('build/assets/images/favicon.svg') }}" type="image/x-icon">
  <!-- [Google Font] Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/tabler-icons.min.css') }}">
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/feather.css') }}">
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/fontawesome.css') }}">
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="{{ asset('build/assets/fonts/material.css') }}">
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/css/style-preset.css') }}">

</head>


<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
 @include('partials.sidebar')
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
 @include('partials.header')
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    @yield('content')
  </div>
  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
   @include('partials.footer')
  </footer>

  <!-- [Page Specific JS] start -->
  <script src="{{ asset('build/assets/js/plugins/apexcharts.min.js') }}"></script>
  <script src="{{ asset('build/assets/js/pages/dashboard-default.js') }}"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="{{ asset('build/assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('build/assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('build/assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('build/assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('build/assets/js/pcoded.js') }}"></script>
  <script src="{{ asset('build/assets/js/plugins/feather.min.js') }}"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>

</body>
<!-- [Body] end -->

</html>