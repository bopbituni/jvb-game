<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>jvb-game</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="/css/base.css" rel="stylesheet" media="all" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" id="page_wrapper">

        <!-- Preloader -->
        

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light w-100 p-fixed ml-0">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-flex align-items-center justify-content-center">
                <img src="/imgs/jvb-vietnam-logo.png" class="width-60 ml-25" />
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-flex align-items-center justify-content-center">
                Admin
            </li>
            <li class="nav-item d-flex align-items-center justify-content-center dropdown pc">
                <a class="nav-link font-13 line-height-16 color-black d-flex align-items-center justify-content-center"
                    data-toggle="dropdown" href="#">
                    <img src="/imgs/jvb-vietnam-logo.png" class="img-circle elevation-2 width-30 mr-30 sp-mr-10" alt="User Image"></a>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right flex-wrap">
                    <div class="dropdown-divider"></div>
                    <!-- <a href="" class="dropdown-item">
                        Backup
                    </a> -->
                    <div class="dropdown-divider"></div>
                    <a href="javascript:$('#logoutForm').submit();" class="dropdown-item">
                        ログアウト
                    </a>
                </div>

            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar control-sidebar-light elevation-4">
        <!-- Brand Logo -->
        <a href="/"
            class="brand-link logo-switch back-app-blue py-0 px-0 height-60 d-flex align-items-center w-100">
            <img src="/imgs/home.png" class="width-50 ml-15" />
        </a>

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- /.sidebar -->
    </aside>
        
    <!-- Content Wrapper. Contains page content -->
    <div class="page-container box-shadow">
        @yield('content')          
    </div>

    <script src="/js/app.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js"></script>
</body>
@yield('js')          
</html>
