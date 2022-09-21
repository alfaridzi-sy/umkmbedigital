@extends('admin.layouts.master')

@section('content')

<div class="content col-xl-12 col-lg-12 mt-5">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools" align="right">
                <a href="{{route('category.create')}}" class="btn btn-sm btn-success">Tambah Data
                    <i class="fa fa-plus-square"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-tools">
                <h4 class="header-title">DATA KATEGORI</h4>
                <table class="table align-items-center table-flush">
                    <thead class="thread-light">
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Jenis Kategori</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $k => $p)
                            <tr class="text-center">
                                <td scope="row">{{$k + 1}}</td>
                                <td scope="row">{{$p -> jenis_produk}}</td>
                                <td scope="row">
                                    {{-- <a href="{{route('category.show',['category' => $p->id_kategori])}}" role="button"
                                        class="btn btn-sm btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a> --}}
                                    <a href="{{route('category.edit',['category' => $p->id_kategori])}}" role="button" 
                                        class="btn btn-sm btn-warning">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    
                                    <form action="{{route('category.destroy',['category' => $p->id_kategori])}}" method="POST" 
                                        style="display: inline;">
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