@extends('layouts.app')

@section('content')
    <!-- Bagian Gambar Utama -->
    <section class="hero-section" style="position: relative;">
        <img src="{{ asset('img/prdk.jpg') }}" alt="Konsultasi Terkini" class="img-fluid w-100">
        <div class="hero-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
            <h1 class="display-4">Produk</h1>
        </div>
    </section>

    <!-- Bagian Produk -->
    <section class="product-section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-primary">Pilihan Produk Dari Kami</h2>
                <select class="form-control mb-4" id="productType" onchange="filterProducts(this.value)">
                    <option value="all">Semua Produk</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->jenisProduk }}">{{ $product->jenisProduk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4 product-card" data-wow-delay="0.1s" data-type="{{ $product->jenisProduk }}">
                        <div class="card h-100">
                           <img src="{{ asset('img/prdk.jpg') }}" alt="Konsultasi Terkini" class="img-fluid w-100">
 alt="{{ $product->namaProduk }}">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $product->namaProduk }}</h5>
                                <p class="card-text">Jenis: {{ $product->jenisProduk }}</p>
                                <p class="card-text">{{ $product->deskripsiProduk }}</p>
                                <p class="card-text"><strong>Bahan:</strong> {{ $product->bahanProduk }}</p>
                                <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->hargaProduk, 0, ',', '.') }}</p>
                                <button onclick="purchaseSuccess()" class="btn btn-primary btn-block">Beli</button>
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
                    <strong class="me-auto">Pembelian Berhasil</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Terima kasih atas pembelian Anda. Pesanan Anda akan segera diproses!
                </div>
            </div>
        </div>
    </div>

    <script>
        function filterProducts(jenisProduk) {
            const cards = document.querySelectorAll('.product-card');
            cards.forEach(card => {
                if (jenisProduk === 'all' || card.dataset.type === jenisProduk) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

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
