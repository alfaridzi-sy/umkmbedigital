<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('page_title')
    </title>
    <!-- Style -->
    @include('admin.layouts.styles')
</head>

<body class="">
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')
    <div class="main-content">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header bg-gradient-warning pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    @yield('breadcrumb')
                </div>
            </div>
        </div>
        <div class="container-fluid mt--7">
            <div class="row mt-5">
                <div class="col-xl-12 mb-12 mb-xl-12">
                    @yield('content')
                </div>
            </div>
            <!-- Footer -->
            @include('admin.layouts.footer')
        </div>
    </div>
    <!-- Scripts -->
    @include('admin.layouts.scripts')
    @stack('scripts')
</body>

</html>
