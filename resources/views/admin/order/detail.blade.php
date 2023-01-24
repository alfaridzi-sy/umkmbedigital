@extends('admin.layouts.master')

@section('page_title')
    Transaksi  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Pesanan </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    @foreach($details as $dt)
    <div class="card shadow">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="mb-0">{{ $dt -> product -> nama_produk }}</h2>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <div class="row">
                <div class="col-4">
                    <img src="https://sdmnk.umkmbedigital.com/public/storage/product/{{ $dt -> product -> foto }}" width= "300px" >
                </div>
                <div class="col-8">
                    <h1 class="h3">{{ $dt -> product -> nama_produk }}</h1>
                    <p>Rp. {{ $dt -> product -> harga }} x {{ $dt -> jumlah }}</p>
                    <p >{{ $dt -> product -> deskripsi_produk }}</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    @endforeach
@endsection
