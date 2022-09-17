<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a href="#" class="text-center">
            <img src="{{ asset('master/assets/img/fav.png') }}" height="100px" >
        </a>

        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{ asset('master/assets/img/brand/favicon.png') }}">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">Administrator</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-8 collapse-brand">
                        {{-- <h1><a class="h2 mb-0 text-dark text-uppercase d-none d-lg-inline-block" href="#">UMKM Be Digital Sidamanik</a></h1> --}}
                        <h2 class="h2 text-dark">UMKM Be Digital Sidamanik</h2>
                    </div>
                    <div class="col-4 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  class=" active>
                    <a class=" nav-link active " href="/adminIndex"> <i class="ni ni-tv-2 text-primary"></i> Dashboard</a>
                </li>

                <div class="dropdown-divider"></div>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users text-yellow"></i> Data Klaster
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-pie text-warning"></i> Data Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-list-alt text-success"></i> Data Produk
                    </a>
                </li>

                <div class="dropdown-divider"></div>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-bag text-info"></i> Data Penjualan
                    </a>
                </li>

                <div class="dropdown-divider"></div>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-text text-purple"></i> Laporan Klaster
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-text text-dark"></i> Laporan Penjualan
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
