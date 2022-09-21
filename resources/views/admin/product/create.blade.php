@extends('admin.layouts.master')

@section('content')

<div class="content col-xl-12 col-lg-12 mt-5">
    <div class="card card-info card-outline">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="card-tools">
                <h4 class="header-title">TAMBAH DATA PRODUK</h4>
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">   
                @csrf
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
</div>

@endsection

