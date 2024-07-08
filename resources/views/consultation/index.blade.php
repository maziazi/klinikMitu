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
    <section class="consultation-section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-primary">Pilihan Konsultasi Dari Kami</h2>
            </div>
            <div class="row">
                @foreach($doctors as $doctor)
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100">
                        <img src="{{ asset('img/' . $doctor->foto) }}" class="card-img-top" alt="Foto Dokter">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $doctor->nama }}</h5>
                            <p class="card-text">{{ $doctor->deskripsi }}</p>
                            <p class="card-text">Rp {{ $doctor->harga }} | {{ $doctor->namaKlinik }}</p>
                            <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Pesan</button>
                        </div>
                    </div>
                </div>
                @endforeach
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
