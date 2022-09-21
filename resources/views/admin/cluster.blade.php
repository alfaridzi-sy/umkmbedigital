@extends('admin.layouts.master')

@section('page_title')
    Klaster  | UMKM Be Digital Sidamanik
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Klaster</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Master Klaster </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Data Master Klaster</h2>
            </div>
            <div class="col text-right">
                <a href="{!! url('cluster/create') !!}" class="btn btn-sm btn-primary">Tambah Klaster</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Penanggung Jawab</th>
                    <th scope="col">Nama Cluster</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cluster as $k => $d)
                <tr class="text-center">
                    <td scope="row">{{ $k + 1 }}</td>
                    <td scope="row">{{$d->penanggung_jawab}}</td>
                    <td scope="row">{{$d->nama}}</td>
                    <td scope="row">{{$d->alamat}}</td>
                    <td scope="row">
                        <div class="btn-group" role="group">
                            <a data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="{!! url('cluster/update') !!}/{{$d->id_cluster}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="{!! url('cluster/destroy') !!}/{{$d->id_cluster}}" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
