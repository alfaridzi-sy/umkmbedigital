@extends('admin.layouts.master')

@section('content')

<div class="content col-xl-12 col-lg-12 mt-5">
    <div class="card card-info card-outline">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="card-tools">
                <h4 class="header-title">EDIT DATA KATEGORI</h4>
                <form action="{{route('category.update',$categories -> id_kategori)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="jenis">Jenis Produk :</label>
                    <input type="text" class="form-control" id="jenis_produk" placeholder="Enter Jenis" 
                    name="jenis_produk" value="{{$categories -> jenis_produk}}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button> 
            </form>
            </div>
        </div>
    </div>
</div>

@endsection