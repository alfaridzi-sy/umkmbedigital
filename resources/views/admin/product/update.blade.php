@extends('admin.layouts.master')

@section('page_title')
Produk  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data Produk </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0 text-center">Edit Data Produk</h1>
                    <hr width=50%>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <form action="{{route('product.update',$products -> id_produk)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group row">
                    <label for="nama_produk" class="col-md-4 col-form-label text-md-right">{{ __('Nama Produk') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{$products -> nama_produk}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi_produk" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Produk') }}</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" rows="5">{{$products -> deskripsi_produk}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stok" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Stok') }}</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="stok" name="stok" value="{{$products -> stok}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Produk') }}</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="harga" name="harga" value="{{$products -> harga}}">
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
                            @foreach($categories as $ct)
                            <option value="{{ $ct -> id_kategori }}" <?php if ($products->id_kategori ==  $ct -> id_kategori ) echo "selected"; ?>>
                                {{ $ct -> jenis_produk}}
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_klaster" class="col-md-4 col-form-label text-md-right">{{ __('Nama Klaster') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="id_cluster" id="id_cluster">
                            <option value="" selected disabled hidden>Pilih Klaster</option>
                            @foreach($clusters as $cl)
                            <option value="{{ $cl -> id_cluster }}" <?php if ($products->id_cluster ==  $cl -> id_cluster ) echo "selected"; ?>>
                                {{ $cl -> nama}}
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-12 text-center">
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Apakah Data Sudah Benar ?')">
                            {{ __('Edit') }}
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

@endsection
