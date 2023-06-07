<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ $title ?? 'none' }} Page - Rent admin panel car</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="/back/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/back/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="/back/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="/back/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="/back/css/app-dark.css" id="darkTheme" disabled>
    @vite([])
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                    placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            <img src="/back/assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3"
                data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <x-nav></x-nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row align-items-center mb-2">
                            <div class="col">
                                <h2 class="h5 page-title">Welcome {{ Auth()->user()->name }}</h2>
                            </div>

                        </div>
                    </div> <!-- /.col -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
            <div class="container-fluid">
                <div class="card">
                    {{ $slot }}
                </div>
            </div>
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="/back/js/jquery.min.js"></script>
    <script src="/back/js/popper.min.js"></script>
    <script src="/back/js/moment.min.js"></script>
    <script src="/back/js/bootstrap.min.js"></script>
    <script src="/back/js/simplebar.min.js"></script>
    <script src='/back/js/daterangepicker.js'></script>
    <script src='/back/js/jquery.stickOnScroll.js'></script>
    <script src="/back/js/tinycolor-min.js"></script>
    <script src="/back/js/config.js"></script>
    <script src="/back/js/d3.min.js"></script>
    <script src="/back/js/topojson.min.js"></script>
    <script src="/back/js/datamaps.all.min.js"></script>
    <script src="/back/js/datamaps-zoomto.js"></script>
    <script src="/back/js/datamaps.custom.js"></script>
    <script src="/back/js/Chart.min.js"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="/back/js/gauge.min.js"></script>
    <script src="/back/js/jquery.sparkline.min.js"></script>
    <script src="/back/js/apexcharts.min.js"></script>
    <script src="/back/js/apexcharts.custom.js"></script>
    <script src="/back/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>
