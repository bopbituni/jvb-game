<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com" />
    <meta property="og:type" content="DX帳簿開発" />
    <meta property="og:title" content="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="DX帳簿開発" />
    <meta property="og:image" content="" />
    <title>DX帳簿開発</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->

    <link href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/css/app.css?v=0.1.1" rel="stylesheet" media="all" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" id="page_wrapper">

        <!-- Preloader -->
        

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light w-100 p-fixed ml-0">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-flex align-items-center justify-content-center">
                <img src="imgs/jvb-vietnam-logo.png" class="width-60 ml-25" />
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
                    <img src="imgs/jvb-vietnam-logo.png" class="img-circle elevation-2 width-30 mr-30 sp-mr-10" alt="User Image"></a>
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
        <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com"
            class="brand-link logo-switch back-app-blue py-0 px-0 height-60 d-flex align-items-center w-100">
            <img src="imgs/home.png" class="width-50 ml-15" />
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-50">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                    <li class="nav-item">
                        <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com" class="nav-link d-flex align-items-center">
                            <img src="/assets/imgs/ico-menu-1.svg" class="height-15 width-15" />
                            <p>
                                TOP
                                <i class="fas fa-angle-right right"></i>
                            </p>
                        </a>
                    </li>

                    
                    <li class="nav-item">
                        <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/companies/basic"
                            class="nav-link d-flex align-items-center active">
                                                    <img src="/assets/imgs/ico-menu-2-white.svg" class="height-15 width-15" />
                                                    <p>
                                Điểm danh
                                <i class="fas fa-angle-right right"></i>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/companies/transaction"
                            class="nav-link d-flex align-items-center ">
                                                    <img src="/assets/imgs/ico-menu-3.svg" class="height-15 width-15" />
                                                    <p>
                                取引先登録
                                <i class="fas fa-angle-right right"></i>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/companies/calc"
                            class="nav-link d-flex align-items-center ">
                                                    <img src="/assets/imgs/ico-menu-4.svg" class="height-15 width-15" />
                                                    <p>
                                勘定科目登録
                                <i class="fas fa-angle-right right"></i>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/companies/credit"
                            class="nav-link d-flex align-items-center ">
                                                    <img src="/assets/imgs/ico-menu-5.svg" class="height-15 width-15" />
                                                    <p>
                                クレジットカード申込書
                                <i class="fas fa-angle-right right"></i>
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
    <div class="content-wrapper pt-80 pb-20 px-20">
        <div class="page-container box-shadow">
            <div class="mx-40 sp-mx-10 row pt-20 pb-20">
                <div class="page-title col-md-3">Link điểm danh:</div>
                <div class="border-bottom-gray col-md-9">{{$link}}</div>
            </div>
          
        </div>
        <!-- Page Container -->
</div>
    <!-- /.content-wrapper -->


    </div>

    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   
</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/js/app.js?v=0.1.1"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fetch-jsonp@1.1.3/build/fetch-jsonp.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

</html>
