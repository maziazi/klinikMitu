<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-light mb-4">Alamat</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl Kaliurang Km.14, Sleman, Daerah Istimewa Yogyakarta</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 81215623332</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@klinikmitu.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-light mb-4">Layanan</h5>
                <a class="btn btn-link" href="{{ url('/product') }}">Produk</a>
                <a class="btn btn-link" href="{{ url('/treatment') }}">Perawatan</a>
                <a class="btn btn-link" href="{{ url('/consultation') }}">Konsultasi</a>
                <a class="btn btn-link" href="{{ url('/docter') }}">Dokter AI</a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase text-white">Informasi Tambahan</h5>
                <p>Klinik Mitu adalah solusi terbaik untuk perawatan kulit Anda. Kami berdedikasi untuk memberikan pelayanan yang memuaskan dengan produk dan teknologi terkini. Dapatkan pembaruan terbaru dari kami dengan berlangganan newsletter.</p>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Anda" aria-label="Email Anda">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ url('/') }}">Klinik Mitu</a>, Semua Hak Dilindungi Undang-Undang.
                </div>
            </div>
        </div>
    </div>
</div>
