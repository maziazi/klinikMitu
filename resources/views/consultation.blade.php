@extends('layouts.app')

@section('content')
    <!-- Bagian Gambar Utama -->
    <section class="hero-section" style="position: relative;">
        <img src="{{ asset('img/konsultasi_klinikMitu.png') }}" alt="Konsultasi Terkini" class="img-fluid w-100">
        <div class="hero-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
            <h1 class="display-4">Konsultasi Terkini</h1>
        </div>
    </section>

    <!-- Bagian Konsultasi -->
    <!-- namaKonsultasi, deskripsiKonsultasi, hargaKonsultasi, idKlinik(namaKlinik) -->
    <section class="consultation-section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-primary">Pilihan Konsultasi Dari Kami</h2>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100">
                        <img src="{{ asset('img/drYuli.png') }}" class="card-img-top" alt="Dr. Yuli">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Yuli</h5>
                            <p class="card-text">Dr. Yuli adalah ahli dermatologi yang berpengalaman dalam berbagai perawatan kulit, termasuk perawatan jerawat, penuaan kulit, dan penyakit kulit kronis.</p>
                            <p class="card-text">Rp 111.111 | Klinik A</p>
                            <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Pesan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100">
                        <img src="{{ asset('img/drAhmad.png') }}" class="card-img-top" alt="Dr. Ahmad">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Ahmad</h5>
                            <p class="card-text">Dr. Ahmad memiliki keahlian dalam perawatan estetika dan kosmetik. Beliau juga berpengalaman dalam melakukan prosedur non-bedah untuk meningkatkan penampilan kulit.</p>
                            <p class="card-text">Rp 999.000 | Klinik B</p>
                            <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Pesan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100">
                        <img src="{{ asset('img/drIta.png') }}" class="card-img-top" alt="Dr. Ita">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Ita</h5>
                            <p class="card-text">Dr. Ita fokus pada perawatan kulit untuk berbagai kondisi dermatologis dan kosmetik. Beliau terkenal karena pendekatannya yang holistik dan personal dalam merawat pasien.</p>
                            <p class="card-text">Rp 21.098 | Klinik A</p>
                            <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Pesan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card h-100">
                        <img src="{{ asset('img/drAsep.png') }}" class="card-img-top" alt="Dr. Asyp">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Asep</h5>
                            <p class="card-text">Dr. Asep adalah ahli dalam penanganan alergi dan infeksi kulit. Beliau selalu mengedepankan diagnosis yang tepat untuk memberikan perawatan yang efektif.</p>
                            <p class="card-text">Rp 54.091 | Klinik A</p>
                            <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Pesan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <img src="{{ asset('img/drRia.png') }}" class="card-img-top" alt="Dr. Ria">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Ria</h5>
                            <p class="card-text">Dr. Ria memiliki spesialisasi dalam perawatan kulit sensitif dan perawatan anti-penuaan. Beliau menggunakan teknik terbaru untuk memastikan hasil yang optimal.</p>
                            <p class="card-text">Rp 78.999 | Klinik C</p>
                            <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Pesan</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card h-100">
                        <img src="{{ asset('img/drBudi.png') }}" class="card-img-top" alt="Dr. Budi">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Dr. Budi</h5>
                            <p class="card-text">Dr. Budi memiliki spesialisasi dalam perawatan kulit sensitif dan perawatan anti-penuaan. Beliau menggunakan teknik terbaru untuk memastikan hasil yang optimal.</p>
                            <p class="card-text">Rp 78.999 | Klinik C</p>
                            <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Purchase Success Toast -->
     <div aria-live="polite" aria-atomic="true" style="position: relative; z-index: 1050;">
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div class="toast" id="successToast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Pemesanan Berhasil</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Terima kasih atas pemesanan Anda. Pesanan Anda akan segera diproses!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function purchaseSuccess() {
            Swal.fire({
                title: 'Sukses!',
                text: 'Pembelian berhasil! Terima kasih telah membeli produk kami.',
                icon: 'success',
                confirmButtonText: 'Oke'
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection