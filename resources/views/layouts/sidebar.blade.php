<!-- Main Sidebar Container -->
<aside class="main-sidebar control-sidebar-light elevation-4">

<!-- Brand Logo -->
<a href="/" class="brand-link logo-switch back-app-blue py-0 px-0 height-60 d-flex align-items-center w-100">
    <img src="/imgs/home.png" class="width-50 ml-15" />
</a>

<!-- Sidebar -->
<div class="sidebar">
    <?php
        $route = Route::current()->getName();
    ?>
    <!-- Sidebar Menu -->
    <nav class="mt-50">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
            <li class="nav-item">
                <a href="{{route('aoe.get_link_survey')}}" class="nav-link d-flex align-items-center {{ $route == 'aoe.get_link_survey' ? 'active' : '' }}">
                    <img src="/assets/imgs/ico-menu-2-white.svg" class="height-15 width-15" />
                    <p>
                        Điểm danh
                        <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('aoe.set_up_team')}}" class="nav-link d-flex align-items-center {{ $route == 'aoe.set_up_team' ? 'active' : '' }}">
                    <img src="/assets/imgs/ico-menu-3.svg" class="height-15 width-15" />
                    <p>
                        Xếp đội hôm nay
                        <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('aoe.profile_gamers')}}" class="nav-link d-flex align-items-center {{ $route == 'aoe.profile_gamers' ? 'active' : '' }}">
                    <img src="/assets/imgs/ico-menu-3.svg" class="height-15 width-15" />
                    <p>
                        Thông tin game thủ
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
