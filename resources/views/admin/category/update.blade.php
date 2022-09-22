@extends('admin.layouts.master')

@section('page_title')
Kategori  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data Kategori </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0 text-center">Edit Data Kategori</h1>
                    <hr width=50%>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <form action="{{route('category.update',$categories -> id_kategori)}}" method="POST">
                @csrf
                @method('PATCH')

                    <div class="form-group row">
                    <label for="nm_menu" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Produk') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="jenis_produk" placeholder="Enter Jenis"
                        name="jenis_produk" value="{{$categories -> jenis_produk}}">
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
                        <a href="{!! url('category') !!}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
