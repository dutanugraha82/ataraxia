<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

<title>
    Ataraxia
</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->

<link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet" />
</head>

  <body class="g-sidenav-show dark-version bg-gray-600">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start  ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
                <a class="navbar-brand" href="/" target="_blank">
                         <h3>Ataraxia</h3>
                </a>
        </div>

<hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="/">
    
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
            </div>

            <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

  
    <li class="nav-item">
    <a class="nav-link text-white " href="/artikel">
        
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
        </div>
        
        <span class="nav-link-text ms-1">Artikel</span>
    </a>
    </li>

  
    <li class="nav-item">
    <a class="nav-link text-white " href="/user">
        
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
        </div>
        
        <span class="nav-link-text ms-1">User</span>
    </a>
    </li>

  
    <li class="nav-item">
    <a class="nav-link text-white " href="/laporan">
        
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_in_ar</i>
        </div>
        
        <span class="nav-link-text ms-1">Laporan</span>
    </a>
    </li>

    <li class="nav-item mt-5">
      <a class="nav-link text-white bg-gradient-primary" href="#">
  
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
          </div>

          <span class="nav-link-text ms-1">Logout</span>
      </a>
  </li>
</ul>
</div>
  
</aside>

<main class="main-content border-radius-lg ">

  @yield('content')

    <footer>
      <div class="container text-center mt-5">
        &copy;2022 | Ataraxia
      </div>
    </footer>

</main>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}" ></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" ></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" ></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}" ></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.4') }}"></script>
</body>

</html>
