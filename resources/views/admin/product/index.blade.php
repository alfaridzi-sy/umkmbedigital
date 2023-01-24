@extends('admin.layouts.master')

@section('page_title')
    Produk  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Master Produk </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Data Master Produk</h2>
            </div>
            <div class="col text-right">
                <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">Tambah Produk</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Deskripsi Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Klaster</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $k => $p)
                    <tr class="text-center">
                        <td scope="row">{{$k + 1}}</td>
                        <td scope="row">
                            <img src="https://sdmnk.umkmbedigital.com/public/storage/product/{{ $p -> foto }}" width= "100px" >
                        </td>
                        <td scope="row" class="text-truncate">{{$p -> nama_produk}}</td>
                        <td scope="row"><?php echo substr($p->deskripsi_produk, 0, 20) ?> ...</td>
                        <td scope="row">{{$p -> stok}}</td>
                        <td scope="row">{{$p -> harga}}</td>
                        <td scope="row">{{$p -> category -> jenis_produk}}</td>
                        <td scope="row">{{$p -> cluster -> nama}}</td>
                        <td scope="row">
                            <div class="btn-group" role="group">
                                <a href="{{route('product.edit',['product' => $p->id_produk])}}" role="button"
                                    class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil"></i>
                                <a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="{!! url('product/destroy') !!}/{{$p->id_produk}}" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
