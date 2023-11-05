<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route(Config::get('AdminLte.brandLink')) }}" class="brand-link">
        <img src="{{ url('/') }}/front/adminlte-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{Config::get('AdminLte.brandName')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('/') }}/front/adminlte-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @php
                    use Mhk67\AdminLte\controllers\DashboardMenuController;
                    $menu = (new DashboardMenuController)->get_menu();
                @endphp
                @foreach($menu as $item)
                    <li class="nav-item @if($item['active']) menu-open @endif">
                        <a href="#" class="nav-link @if($item['active']) active @endif">
                            <i class="nav-icon {{$item['icon']}}"></i>
                            <p>
                                {{$item['text']}}
                                @if($item['sub-menu'])
                                    <i class="right fas fa-angle-left"></i>
                                @endif
                                @foreach($item['badge'] as $style=>$value)
                                    <span class="right badge badge-{{$style}}">{{$value}}</span>
                                @endforeach
                            </p>
                        </a>
                        @if($item['sub-menu'])
                            <ul class="nav nav-treeview">
                                @foreach($item['sub-menu'] as $sub_menu)
                                    <li class="nav-item">
                                        <a href="{{route($sub_menu['link'])}}"
                                           class="nav-link @if($sub_menu['active']) active @endif">
                                            <i class="{{$sub_menu['icon']}} nav-icon"></i>
                                            <p>{{$sub_menu['text']}}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
