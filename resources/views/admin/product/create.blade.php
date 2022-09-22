@extends('admin.layouts.master')

@section('page_title')
    Produk  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Produk </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0 text-center">Tambah Data Produk</h1>
                    <hr width=50%>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="nama_produk" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi_produk" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Produk') }}</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stok" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Stok') }}</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="stok" name="stok">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Produk') }}</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="harga" placeholder="Enter Harga" name="harga">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto Produk') }}</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_kategori" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Produk') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="id_kategori" id="id_kategori">
                            <option value="" selected disabled hidden>Pilih Kategori</option>
                            @foreach ($categories as $ct)
                            <option value="<?php echo $ct->id_kategori ?>">{{ $ct->jenis_produk }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_klaster" class="col-md-4 col-form-label text-md-right">{{ __('Nama Klaster') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="id_cluster" id="id_cluster">
                            <option value="" selected disabled hidden>Pilih Klaster</option>
                            @foreach ($clusters as $cl)
                            <option value="<?php echo $cl->id_cluster ?>">{{ $cl->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-12 text-center">
                        <button type="submit" class="btn btn-warning">
                            {{ __('Tambah') }}
                        </button>
                        <button type="reset" class="btn btn-light">
                            {{ __('Reset') }}
                        </button>
                        <a href="{!! url('product') !!}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

{{-- <div class="content col-xl-12 col-lg-12 mt-5">
    <div class="card card-info card-outline">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="card-tools">
                <h4 class="header-title">TAMBAH DATA PRODUK</h4>
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="deksprsi">Nama Produk :</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Enter Stok">
                </div>
                <div class="form-group">
                    <label for="deksprsi">Deskripsi Produk :</label>
                    <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk"
                        placeholder="Enter Deskripsi Produk " cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="stok">Stok :</label>
                    <input type="number" class="form-control" id="stok" placeholder="Enter Stok"
                    name="stok">
                </div>
                <div class="form-group">
                    <label for="harga">Harga :</label>
                    <input type="number" class="form-control" id="harga" placeholder="Enter Harga"
                    name="harga">
                </div>
                <div class="form-group">
                    <label for="foto">Foto :</label>
                    <input type="file" class="form-control" id="foto" placeholder="Enter Jenis"
                    name="foto">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Kategori :</label>
                    <select class="form-control" name="id_kategori" id="id_kategori">
                        <option value="" selected disabled hidden>Pilih Kategori</option>
                        @foreach ($categories as $ct)
                        <option value="<?php echo $ct->id_kategori ?>">{{ $ct->jenis_produk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cluster">Klaster :</label>
                    <select class="form-control" name="id_cluster" id="id_cluster">
                        <option value="" selected disabled hidden>Pilih Klaster</option>
                        @foreach ($clusters as $cl)
                        <option value="<?php echo $cl->id_cluster ?>">{{ $cl->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
        </div>
    </div>
</div> --}}

@endsection

