@extends('admin.layouts.master')

@section('css')
<link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection

@section('title')
Daftar Cluster  
@endsection

@section('content')
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Master Data</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="#" class="breadcrumb-link">Master Data</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Cluster</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Daftar Cluster</h5>
                            </div>
                            <div class="col-6">
                                <a href="{!! url('cluster/create') !!}" class="btn btn-sm btn-dark float-right">Tambah Cluster</a>
                                <!-- <button class="btn btn-sm btn-dark float-right" data-toggle="modal" data-target="#exampleModal" onclick="create()">Tambah Cluster</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Penanggung Jawab</th>
                                        <th>Nama Cluster</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cluster as $d)
                                    <tr>
                                        <td>{{$d->penanggung_jawab}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>{{$d->alamat}}</td>
                                        <td>
                                            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="fedit('{{$d->id_anggota}}')"><i class="fas fa-fw fa-pencil-alt"></i></button> -->
                                            <a href="{!! url('cluster/update') !!}/{{$d->id_cluster}}" class="btn btn-primary">Edit</a>
                                            <a href="{!! url('cluster/destroy') !!}/{{$d->id_cluster}}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fas fa-fw fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cluster</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
            </div>
            <form action="{!! url('cluster/create') !!}" method="post" id='_form'>
            @csrf
            <input type="number" class="form-control" name="id" id="id" hidden>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-form-label">Penanggung Jawab</label>
                    <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab" placeholder="Masukan Nama Penanggung Jawab">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Nama Cluster</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Cluster">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Cluster">
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                <button type="submit" class="btn btn-primary">Simpan perubahan</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection