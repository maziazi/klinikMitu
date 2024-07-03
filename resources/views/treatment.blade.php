@extends('layouts.app')

@section('content')
    <!-- Bagian Gambar Utama -->
    <section class="hero-section" style="position: relative;">
        <img src="{{ asset('images/hero-treatment.jpg') }}" alt="Perawatan Terbaik" class="img-fluid w-100">
        <div class="hero-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
            <h1 class="display-4">Perawatan Terbaik</h1>
        </div>
    </section>

    <!-- Bagian Perawatan -->
    <section class="treatment-section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="text-primary">Pilihan Perawatan Dari Kami</h2>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100">
                        <img src="{{ asset('images/facial.jpg') }}" class="card-img-top" alt="Facial">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Facial</h5>
                            <p class="card-text">Metode: Pembersihan Mendalam</p>
                            <p class="card-text">Durasi: 60 Menit</p>
                            <p class="card-text">Manfaat: Membersihkan dan mencerahkan kulit wajah.</p>
                            <p class="card-text">Harga: Rp 300.000</p>
                            <a href="#" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100">
                        <img src="{{ asset('images/microdermabrasion.jpg') }}" class="card-img-top" alt="Microdermabrasion">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Microdermabrasion</h5>
                            <p class="card-text">Metode: Eksfoliasi Mikro</p>
                            <p class="card-text">Durasi: 45 Menit</p>
                            <p class="card-text">Manfaat: Mengurangi bekas jerawat dan garis halus.</p>
                            <p class="card-text">Harga: Rp 400.000</p>
                            <a href="#" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100">
                        <img src="{{ asset('images/laser.jpg') }}" class="card-img-top" alt="Laser Treatment">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Laser Treatment</h5>
                            <p class="card-text">Metode: Terapi Laser</p>
                            <p class="card-text">Durasi: 30 Menit</p>
                            <p class="card-text">Manfaat: Mengencangkan kulit dan mengurangi kerutan.</p>
                            <p class="card-text">Harga: Rp 500.000</p>
                            <a href="#" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card h-100">
                        <img src="{{ asset('images/chemical-peel.jpg') }}" class="card-img-top" alt="Chemical Peel">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Chemical Peel</h5>
                            <p class="card-text">Metode: Pengelupasan Kimia</p>
                            <p class="card-text">Durasi: 60 Menit</p>
                            <p class="card-text">Manfaat: Mengatasi pigmentasi dan tekstur kulit tidak merata.</p>
                            <p class="card-text">Harga: Rp 600.000</p>
                            <a href="#" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100">
                        <img src="{{ asset('images/prp.jpg') }}" class="card-img-top" alt="PRP Treatment">
                        <div class="card-body">
                            <h5 class="card-title text-primary">PRP Treatment</h5>
                            <p class="card-text">Metode: Platelet-Rich Plasma</p>
                            <p class="card-text">Durasi: 90 Menit</p>
                            <p class="card-text">Manfaat: Rejuvenasi kulit dan mengurangi bekas luka.</p>
                            <p class="card-text">Harga: Rp 700.000</p>
                            <a href="#" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card h-100">
                        <img src="{{ asset('images/rf.jpg') }}" class="card-img-top" alt="RF Treatment">
                        <div class="card-body">
                            <h5 class="card-title text-primary">RF Treatment</h5>
                            <p class="card-text">Metode: Radio Frequency</p>
                            <p class="card-text">Durasi: 60 Menit</p>
                            <p class="card-text">Manfaat: Mengencangkan kulit dan memperbaiki kontur wajah.</p>
                            <p class="card-text">Harga: Rp 800.000</p>
                            <a href="#" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
