<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik Mitu</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Beranda</a>
            <div class="nav-item dropdown">
                <a href="{{ url('/product') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ url('/micillarwater') }}" class="dropdown-item">Pembersih Wajah</a>
                    <a href="{{ url('/facialwash') }}" class="dropdown-item">Sabun Cuci Muka</a>
                    <a href="{{ url('/toner') }}" class="dropdown-item">Toner</a>
                    <a href="{{ url('/sunscreen') }}" class="dropdown-item">Sunscreen</a>
                    <a href="{{ url('/other') }}" class="dropdown-item">Lainnya</a>
                </div>
            </div>
            <a href="{{ url('/treatment') }}" class="nav-item nav-link">Perawatan</a>
            <a href="{{ url('/consultation') }}" class="nav-item nav-link">Konsultasi</a>
            <a href="{{ url('/docter') }}" class="nav-item nav-link">Dokter AI</a>
        </div>
    </div>
</nav>
