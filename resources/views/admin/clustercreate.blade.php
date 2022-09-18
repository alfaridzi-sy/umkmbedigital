@extends('admin.layouts.master')

@section('page_title')
    Tambah Cluster
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Menu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Cluster </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0 text-center">Tambah Data Cluster</h1>
                    <hr width=50%>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <form method="POST" action="{!! url('cluster/store')!!}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="nm_menu" class="col-md-4 col-form-label text-md-right">{{ __('Penanggung Jawab') }}</label>
                    <div class="col-md-6">
                        <input id="penanggung_jawab" type="text" class="form-control @error('penanggung_jawab') is-invalid @enderror" name="penanggung_jawab" value="{{ old('penanggung_jawab') }}" required autocomplete="penanggung_jawab" autofocus>
                        @error('penanggung_jawab')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nm_menu" class="col-md-4 col-form-label text-md-right">{{ __('Nama Cluster') }}</label>
                    <div class="col-md-6">
                        <input id="nm_menu" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nm_menu" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                    <div class="col-md-6">
                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                        <a href="{!! url('cluster') !!}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection