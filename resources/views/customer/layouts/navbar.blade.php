<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('customer/images/logo_kopi.png') }}" alt="" /><span>
                UMKM Sidamanik
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{ route('customer.beranda') }}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.produk') }}"> Produk</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href=""> Tentang </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.contact') }}">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
                <a href="">
                    Login
                </a>
                </div>
            </div>
        </nav>
    </div>
</header>
