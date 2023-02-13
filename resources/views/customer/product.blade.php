@extends('customer.layouts.master')

@section('page_title')
    Produk | UMKM Be Digital Sidamanik
@endsection

@section('page_type')
    <div class="hero_area sub_pages">
@endsection

@section('content')
<section class="fruit_section mt-5">
    <div class="container">
        <h2 class="custom_heading">Daftar Produk</h2>
        <p class="custom_heading-text">
            Banyak produk menarik yang merupakan produk murni dari UMKM setempat
        </p>
        @foreach ($products as $product)
            <div class="row layout_padding2">
                <div class="col-md-8">
                    <div class="fruit_detail-box">
                        <h3>{{ $product -> nama_produk }}</h3>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;" disabled>Rp. <?php echo number_format($product -> harga, 0, '.', '.') ?></button>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;"disabled>{{ $product -> category -> jenis_produk }}</button>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;"disabled>{{ $product -> stok }} Tersisa</button>
                        <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 12px;"disabled>{{ $product -> cluster -> nama }}</button>
                        <p class="mt-4 mb-5">
                            {{ $product -> deskripsi_produk }}
                        </p>
                        <div>
                            <a href="#" class="custom_dark-btn" data-toggle="modal" data-target="#modal<?php echo $product -> id_produk ?>">
                                Beli Sekarang
                            </a>

                            <div class="modal fade" id="modal<?php echo $product -> id_produk ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Detail</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        
                                        <div class="modal-body">
                                            <form method="POST">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                                    <input type="text" class="form-control" value="<?php echo $product -> id_produk ?>" hidden>
                                                    <input type="text" class="form-control" value="<?php echo $product -> nama_produk ?>">
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                                                    <textarea class="form-control" rows="5"><?php echo $product -> deskripsi_produk ?></textarea>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Harga Barang</label>
                                                    {{-- <input type="number" class="form-control" placeholder="Rp. <?php echo number_format($product -> harga  * 5, 0, '.', '.') ?>"> --}}
                                                    <input type="text" class="form-control" value="<?php echo $product -> harga ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Jumlah Barang</label>
                                                    <input type="text" class="form-control" value="" placeholder="Jumlah Barang" id="jumlah">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Total Harga Barang</label>
                                                    <input type="text" class="form-control" value="<?php echo $product -> harga  ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Alamat Kirim Barang</label>
                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Pesan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="fruit_img-box d-flex justify-content-center align-items-center">
                        <img src="https://sdmnk.umkmbedigital.com/public/storage/product/{{ $product -> foto }}" alt="" class="" width="250px" />
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>
</section>
@endsection
