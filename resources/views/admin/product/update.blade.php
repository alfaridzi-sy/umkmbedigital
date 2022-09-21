@extends('admin.layouts.master')

@section('content')

<div class="content col-xl-12 col-lg-12 mt-5">
    <div class="card card-info card-outline">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="card-tools">
                <h4 class="header-title">EDIT DATA KATEGORI</h4>
                <form action="{{route('product.update',$products -> id_produk)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="jenis">Deskripsi Produk :</label>
                    <input type="text" class="form-control" id="deskripsi_produk" 
                    name="deskripsi_produk" value="{{$products -> deskripsi_produk}}">
                </div>
                <div class="form-group">
                    <label for="jenis">Stok :</label>
                    <input type="number" class="form-control" id="stok" 
                    name="stok" value="{{$products -> stok}}">
                </div>
                <div class="form-group">
                    <label for="jenis">Harga :</label>
                    <input type="number" class="form-control" id="harga" 
                    name="harga" value="{{$products -> harga}}">
                </div>
                <div class="form-group">
                    <label for="foto">Foto :</label>
                    <input type="text" class="form-control" id="foto" placeholder="Enter Jenis" 
                    name="foto" value="{{$products -> foto}}">
                    <br>
                    <input type="file" class="form-control" id="foto" placeholder="Enter Jenis" 
                    name="foto" value="{{$products -> foto}}">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Kategori :</label>
                    
                    <select class="form-control @error('id_kategori') is-invalid @enderror" 
                        name="id_kategori" value="{{ old('id_kategori') }}" required autocomplete="id_kategori" 
                        autofocus>
                            <option value="" selected disabled hidden>Pilih Kategori</option>
                            @foreach($categories as $ct)
                                <option value="{{ $ct -> id_kategori }}" 
                                    <?php if ($products->id_kategori ==  $ct -> id_kategori ) echo "selected"; ?>>
                                    {{ $ct -> jenis_produk}}</option>
                            @endforeach
                    </select>
                    @error('id_kategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cluster">Klaster :</label>
                    <select class="form-control @error('id_cluster') is-invalid @enderror" 
                        name="id_cluster" value="{{ old('id_cluster') }}" required autocomplete="id_cluster" 
                        autofocus>
                            <option value="" selected disabled hidden>Pilih Klaster</option>
                            @foreach($clusters as $cl)
                                <option value="{{ $cl -> id_cluster }}" 
                                    <?php if ($products->id_cluster ==  $cl -> id_cluster ) echo "selected"; ?>>
                                    {{ $cl -> nama}}</option>
                            @endforeach
                    </select>
                    @error('id_cluster')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button> 
            </form>
            </div>
        </div>
    </div>
</div>

@endsection