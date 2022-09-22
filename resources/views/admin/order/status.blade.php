@extends('admin.layouts.master')

@section('page_title')
    Transaksi  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Status Pesanan </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0 text-center">Edit Status Pesanan</h1>
                    <hr width=50%>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <form action="{{route('order.update',$orders -> id_pesan)}}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group row">
                    <label for="nm_menu" class="col-md-4 col-form-label text-md-right">{{ __('Status Pesanan') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="status_pesan" id="status_pesan">
                            <option value="" selected disabled hidden>Pilih Status Pesanan</option>
                            <option value="1" <?php if ($orders->status_pesan ==  1 ) echo "selected"; ?>>
                                Menunggu Pembayaran
                            </option>
                            <option value="2" <?php if ($orders->status_pesan ==  2 ) echo "selected"; ?>>
                                Pembayaran Berhasil
                            </option>
                            <option value="3" <?php if ($orders->status_pesan ==  3 ) echo "selected"; ?>>
                                Proses Pengemasan
                            </option>
                            <option value="4" <?php if ($orders->status_pesan ==  4 ) echo "selected"; ?>>
                                Dalam Pengiriman
                            </option>
                            <option value="5" <?php if ($orders->status_pesan ==  4 ) echo "selected"; ?>>
                                Pesanan Selesai
                            </option>
                            <option value="6" <?php if ($orders->status_pesan ==  5 ) echo "selected"; ?>>
                                Pesanan Dibatalkan
                            </option>
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
                        <a href="{!! url('order') !!}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
