@extends('customer.layouts.master')

@section('page_title')
    Beranda | UMKM Be Digital Sidamanik
@endsection

@section('page_type')
    <div class="hero_area">
@endsection

@section('slider')
    <section class=" slider_section position-relative">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider_item-box">
                    <div class="slider_item-container">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="slider_item-detail">
                                <div>
                                <h1>
                                    Selamat Datang
                                </h1>
                                <h2>
                                    di Website UMKM Sidamanik
                                </h2>

                                <p>
                                    UMKM merupakan salah satu ujung tombak peningkatan perekonomian desa.
                                    Dalam hal ini Perguruan Tinggi bekerjasama dengan pemerintah melalui
                                    pemberdayaan masyarakat UMKM untuk meningkatkan ekonomi Desa Sidamanik.
                                </p>
                                <div class="d-flex">
                                    <a href="" class="text-uppercase custom_orange-btn mr-3">
                                    Beli Sekarang
                                    </a>
                                    <a href="" class="text-uppercase custom_dark-btn">
                                    Hubungi Kami
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="slider_img-box">
                                <div>
                                <img src="{{ asset('customer/images/kopi.jpeg') }}" alt="" class="" />
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider_item-box">
                    <div class="slider_item-container">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="slider_item-detail">
                                <div>
                                <h1>
                                    Selamat Datang
                                </h1>
                                <h2>
                                    di Website UMKM Sidamanik
                                </h2>
                                <p>
                                    Website ini merupakan implementasi teknologi pada pemasaran produk UMKM
                                    sehingga customer diseluruh Indonesia dapat membeli secara online dengan
                                    berbagai kemudahan dan kenyamanan.
                                </p>
                                <div class="d-flex">
                                    <a href="" class="text-uppercase custom_orange-btn mr-3">
                                    Beli Sekarang
                                    </a>
                                    <a href="" class="text-uppercase custom_dark-btn">
                                    Hubungi Kami
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="slider_img-box">
                                <div>
                                <img src="{{ asset('customer/images/teh.jpeg') }}" alt="" class="" />
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="custom_carousel-control">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- category section -->
    <section class="service_section layout_padding ">
        <div class="container">
            <h2 class="custom_heading">Kategori Produk</h2>
            <p class="custom_heading-text">
                Kami memiliki beberapa kategori Produk untuk Anda
            </p>
            <div class=" layout_padding2">
                <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('customer/images/card-coffee.png') }}" alt="Card image cap" />
                    <div class="card-body">
                    <h5 class="card-title">Kopi</h5>
                    <p class="card-text">
                        Biji kopi adalah biji dari tumbuhan kopi dan merupakan sumber dari minuman kopi. Warna bijinya adalah putih dan sebagian besar berupa endosperma. Setiap buah umumnya memiliki dua biji. Buah yang hanya mengandung satu biji disebut dengan peaberry dan dipercaya memiliki rasa yang lebih baik.
                    </p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('customer/images/card-tea.png') }}" alt="Card image cap" />
                    <div class="card-body">
                    <h5 class="card-title">Teh</h5>
                    <p class="card-text">
                        Tanaman (daun) teh (Camellia sinensis) adalah spesies tanaman yang daun dan pucuk daunnya digunakan untuk membuat teh. Teh adalah bahan minuman yang secara universal dikonsumsi di banyak negara serta berbagai lapisan masyarakat
                    </p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('customer/images/card-honey.png') }}" alt="Card image cap" />
                    <div class="card-body">
                    <h5 class="card-title">Madu</h5>
                    <p class="card-text">
                        Madu adalah subtansi makanan manis dan kental yang dibuat oleh lebah madu dan beberapa serangga lain. Lebah menghasilkan madu dari sekresi gula tumbuhan (nektar bunga) atau dari sekresi serangga lain (seperti honeydew atau madu serangga). Madu terbentuk melalui regurgitasi, aktivitas enzimatik, dan penguapan air.
                    </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end category section -->

    <!-- product section -->
    <section class="fruit_section">
        <div class="container">
            <h2 class="custom_heading">Produk Terbaru</h2>
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
                                <a href="#" class="custom_dark-btn">
                                    Beli Sekarang
                                </a>
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
    <!-- end product section -->

    <!-- cluster section -->
    <section class="client_section layout_padding">
        <div class="container">
        <h2 class="custom_heading">Cluster Terbaru</h2>
        <p class="custom_heading-text">
            Beragam produk yang tersedia dihasilkan oleh berbagai Klaster UMKM setempat
        </p>
        <div>
            <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($clusters as $i => $cluster)
                <?php
                    if($i==0){
                ?>
                    <div class="carousel-item active">
                        <div class="client_container layout_padding2">
                            <div class="client_img-box">
                                <img src="{{ asset('master/assets/img/building.png') }}" alt="" />
                            </div>
                            <div class="client_detail">
                                <h3>
                                    {{ $cluster-> nama }}
                                </h3>
                                <p class="custom_heading-text">
                                    Klaster {{ $cluster-> nama }} bertempat di {{ $cluster-> alamat }} dan ditanggung jawabi oleh {{ $cluster-> penanggung_jawab }}.
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                    }else{
                ?>
                <div class="carousel-item">
                    <div class="client_container layout_padding2">
                        <div class="client_img-box">
                            <img src="{{ asset('master/assets/img/building.png') }}" alt="" />
                        </div>
                        <div class="client_detail">
                            <h3>
                                {{ $cluster-> nama }}
                            </h3>
                            <p class="custom_heading-text">
                                Klaster {{ $cluster-> nama }} bertempat di {{ $cluster-> alamat }} dan ditanggung jawabi oleh {{ $cluster-> penanggung_jawab }}.
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                @endforeach

            </div>
            <div class="custom_carousel-control">
                <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
                <span class="" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
                <span class="" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>

            </div>
        </div>
        </div>
    </section>
    <!-- end cluster section -->

    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
        <h2 class="font-weight-bold">
            Hubungi Kami
        </h2>
        <div class="row">
            <div class="col-md-8 mr-auto">
            <form action="">
                <div class="contact_form-container">
                <div>
                    <div>
                    <input type="text" placeholder="Nama">
                    </div>
                    <div>
                    <input type="text" placeholder="Nomor Handphone">
                    </div>
                    <div>
                    <input type="email" placeholder="Email">
                    </div>

                    <div class="mt-5">
                    <input type="text" placeholder="Pesan">
                    </div>
                    <div class="mt-5">
                    <button type="submit">
                        Kirim
                    </button>
                    </div>
                </div>

                </div>

            </form>
            </div>
        </div>
        </div>
    </section>
    <!-- end contact section -->

@endsection

