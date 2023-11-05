<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    <?php echo isset($title) ? $title : "SmartCondoPro" ?>
</title>
@yield('head')
@include('includes.styles')
 
@yield('styles')
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="bg-primary position-absolute w-100 top-band"></div>
  @include('includes.sidebar')
  <!--  ======| Content Area Start |====== -->
  <main class="main-content position-relative border-radius-lg ">
    @include('includes.page-header')
    <!--  Main Content Area Starts |====== -->
    <div class="container-fluid py-4">
      <div class="row">
        
        @yield('body')
        
      </div>
    </div>
    @include('includes.scripts')
    @yield('page-scripts')

    @include('includes.footer')

  </main>
  <!-- Content Area Ends -->

  


</body>

</html>