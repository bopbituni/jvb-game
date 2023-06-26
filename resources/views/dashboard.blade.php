<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <!-- Base CSS -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet" media="all" type="text/css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
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
        <div class="w-100 vh-min-100 back-app-main pt-30 pb-100 box-border">
            <div class="home-container text-center">

                <div class="pt-90 sp-pt-60">
                    <h1 class="font-26 color-app-main">Danh sách Game</h1>
                </div>

                <div class="d-flex mt-50 sp-mt-30 sp-flex-wrap">

                    <div class="flex-1 back-white mx-2 mb-14 d-flex">
                        <div class="flex-2">
                            <img src="imgs/aoe.png" class="height-150 width-175 px-10 py-10" />
                        </div>
                        <div class="flex-1 text-center d-flex align-items-center justify-content-center">
                            <div>
                                <div class="font-20 line-height-24 text-bold mb-25">AOE</div>
                                <a href="{{route('aoe.get_link_survey')}}" class="font-16 line-heigh-18 color-white btn-home py-14 px-45 sp-px-20 sp-px-20">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 back-white mx-2 mb-14 d-flex">
                        <div class="flex-2">
                            <img src="imgs/lol.png" class="height-150 width-175 px-10 py-10" />
                        </div>
                        <div class="flex-1 d-flex text-center align-items-center justify-content-center">
                            <div>
                                <div class="font-20 line-height-24 text-bold mb-25">League of Legends</div>
                                <a href="#" class="font-16 line-heigh-18 color-white btn-home py-14 px-45 sp-px-20">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/logout" accept-charset="UTF-8" id="logoutForm"><input name="_token" type="hidden" value="3ROLTb0zC8rrUVhfZsOXfvp61ZNhIID2duQMyQbv">
    </form>
    <script src="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</html>
