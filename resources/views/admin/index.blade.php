@extends('admin.layouts.master')

@section('page_title')
    Dashboard | UMKM Be Digital Sidamanik
@endsection

@section('page_header')
    Dashboard
@endsection

@section('breadcrumb')
    <!-- Card stats -->
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Klaster</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{ $user }}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{$persen_user}}%</span> --}}
                        {{-- <span class="text-nowrap">Pengguna ditambahkan bulan ini</span> --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Konsumen</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{$kategori}}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        {{-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> {{$kategori_bulan}}</span> --}}
                        {{-- <span class="text-nowrap">Kategori baru bulan ini.</span> --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Produk</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{$toko}}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                <i class="fas fa-list-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        {{-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> {{$persen_toko}}%</span> --}}
                        {{-- <span class="text-nowrap">Toko mendaftar bulan ini.</span> --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Pesanan</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{$menu}}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        {{-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> {{$menu_bulan}}</span> --}}
                        {{-- <span class="text-nowrap">Menu baru bulan ini.</span> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="mb-0 text-center">Selamat Datang di Halaman Admin UMKM Be Digital Sidamanik</h2>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <p class="text">
                Lorem ipsum.
            </p>
        </div>
    </div>
@endsection
