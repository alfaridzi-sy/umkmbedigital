@extends('admin.layouts.master')

@section('page_title')
    Transaksi  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Master Pesanan </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Data Master Pesanan</h2>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Kode Pesanan</th>
                    <th scope="col">Nama Konsumen</th>
                    <th scope="col">Tanggal Pesanan</th>
                    <th scope="col">Alamat Pengiriman</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $k => $od)
                    <tr class="text-center">
                        <td scope="row">{{$k + 1}}</td>
                        <td scope="row">{{$od -> kd_pesan}}</td>
                        <td scope="row">{{$od -> consumer -> nama}}</td>
                        <td scope="row">{{$od -> tgl_pesan}}</td>
                        <td scope="row">{{$od -> alamat_kirim}}</td>
                        <td scope="row">{{$od -> total}}</td>
                        <td scope="row">
                            <?php
                                if ($od -> status_pesan == 1) {
                                    echo "<button class='btn btn-sm btn-danger'>Menunggu Pembayaran</button>";
                                } else if ($od -> status_pesan == 2){
                                    echo "<button class='btn btn-sm btn-warning'>Pembayaran Berhasil</button>";
                                } else if ($od -> status_pesan == 3){
                                    echo "<button class='btn btn-sm btn-info'>Proses Pengemasan</button>";
                                } else if ($od -> status_pesan == 4){
                                    echo "<button class='btn btn-sm btn-primary'>Dalam Pengiriman</button>";
                                } else if ($od -> status_pesan == 5){
                                    echo "<button class='btn btn-sm btn-success'>Pesanan Selesai</button>";
                                } else if ($od -> status_pesan == 6){
                                    echo "<button class='btn btn-sm btn-secondary'>Pesanan Dibatalkan</button>";
                                }
                            ?>
                        </td>
                        <td scope="row">
                            <div class="btn-group" role="group">
                                <a href="{{route('order.show',['order' => $od->id_pesan])}}" role="button" class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('order.edit',['order' => $od->id_pesan])}}" role="button" class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
