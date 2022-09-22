@extends('admin.layouts.master')

@section('content')

<div class="content col-xl-12 col-lg-12 mt-5">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools" align="right">
                <a href="{{route('product.create')}}" class="btn btn-sm btn-success">Tambah Data
                    <i class="fa fa-plus-square"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-tools">
                <h4 class="header-title">DATA PRODUK</h4>
                <table class="table align-items-center table-flush">
                    <thead class="thread-light">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Deskripsi Produk</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Klaster</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $k => $p)
                            <tr class="text-center">
                                <td scope="row">{{$k + 1}}</td>
                                <td scope="row">{{$p -> deskripsi_produk}}</td>
                                <td scope="row">{{$p -> stok}}</td>
                                <td scope="row">{{$p -> harga}}</td>
                                {{-- <td scope="row">{{$p -> foto}}</td> --}}
                                <td scope="row">
                                    <img src="/storage/product/{{$p -> foto}}" width= "100px" >
                                </td>
                                <td scope="row">{{$p -> category -> jenis_produk}}</td>
                                <td scope="row">{{$p -> cluster -> nama}}</td>
                                <td scope="row">
                                    {{-- <a href="{{route('product.show',['product' => $p->id_produk])}}" role="button"
                                        class="btn btn-sm btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a> --}}
                                    <a href="{{route('product.edit',['product' => $p->id_produk])}}" role="button" 
                                        class="btn btn-sm btn-warning">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{route('product.destroy',['product' => $p->id_produk])}}" 
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-sm btn-danger" value="Delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection