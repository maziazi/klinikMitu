@extends('layouts.app')

@section('content')
        <section class="consultation-section">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Konsultasi</p>
                    <h1>Ceritakan Keluhan Kulit Dengan Ahli Dermatologi Terbaik</h1>
                </div>
                <div class="consultation-options">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="consultation-card">
                                <img src="path/to/image1.jpg" alt="Dr. Yuli" class="team-1">
                                <h2>Dr. Yuli</h2>
                                <p>Dr. Yuli adalah ahli dermatologi yang berpengalaman dalam berbagai perawatan kulit, termasuk perawatan jerawat, penuaan kulit, dan penyakit kulit kronis.</p>
                                <a href="konsultasi-dr-yuli.html" class="btn">Pesan</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="consultation-card">
                                <img src="path/to/image2.jpg" alt="Dr. Ahmad" class="team-2">
                                <h2>Dr. Ahmad</h2>
                                <p>Dr. Ahmad memiliki keahlian dalam perawatan estetika dan kosmetik. Beliau juga berpengalaman dalam melakukan prosedur non-bedah untuk meningkatkan penampilan kulit.</p>
                                <a href="konsultasi-dr-ahmad.html" class="btn">Pesan</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="consultation-card">
                                <img src="path/to/image3.jpg" alt="Dr. Ita" class="consultation-image">
                                <h2>Dr. Ita</h2>
                                <p>Dr. Ita fokus pada perawatan kulit untuk berbagai kondisi dermatologis dan kosmetik. Beliau terkenal karena pendekatannya yang holistik dan personal dalam merawat pasien.</p>
                                <a href="konsultasi-dr-ita.html" class="btn">Pesan</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="consultation-card">
                                <img src="path/to/image4.jpg" alt="Dr. Asyp" class="consultation-image">
                                <h2>Dr. Asyp</h2>
                                <p>Dr. Asyp adalah ahli dalam penanganan alergi dan infeksi kulit. Beliau selalu mengedepankan diagnosis yang tepat untuk memberikan perawatan yang efektif.</p>
                                <a href="konsultasi-dr-asyp.html" class="btn">Pesan</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="consultation-card">
                                <img src="path/to/image5.jpg" alt="Dr. Ria" class="consultation-image">
                                <h2>Dr. Ria</h2>
                                <p>Dr. Ria memiliki spesialisasi dalam perawatan kulit sensitif dan perawatan anti-penuaan. Beliau menggunakan teknik terbaru untuk memastikan hasil yang optimal.</p>
                                <a href="konsultasi-dr-ria.html" class="btn">Pesan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Konsultasi Rinci -->
        <section class="detailed-consultation-section">
            <div class="container">
                <div class="section-header text-center">
                    <h1>Konsultasi</h1>
                </div>
                <div class="detailed-consultation-content">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="path/to/image6.jpg" alt="Konsultasi Dr. Ahmad" class="detailed-consultation-image">
                        </div>
                        <div class="col-md-6">
                            <h2>Konsultasi dengan Dr. Ahmad</h2>
                            <p>Dr. Ahmad adalah salah satu dokter terbaik kami yang memiliki spesialisasi dalam perawatan estetika dan kosmetik. Beliau berpengalaman dalam berbagai prosedur non-bedah yang bertujuan untuk meningkatkan penampilan kulit Anda.</p>
                            <a href="booking-dr-ahmad.html" class="btn">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
@endsection