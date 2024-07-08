<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Klinik Mitu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl Kaliurang Km.14, Sleman, Daerah Istimewa Yogyakarta</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Jumat : 09.00 - 21.00 WIB</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
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
                        <a href="{{ url('/other') }}" class="dropdown-item">lainnya</a>
                    </div>
                </div>
                <a href="{{ url('/treatment') }}" class="nav-item nav-link">Perawatan</a>
                <a href="{{ url('/consultation') }}" class="nav-item nav-link">Konsultasi</a>
                <a href="{{ url('/docter') }}" class="nav-item nav-link">Dokter AI</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Kesehatan Kulit Adalah Sumber Dari Kebahagiaan</h1>
                <div class="row g-4">
                    <div class="col-sm-3">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">3</h2>
                            <p class="text-light mb-0">Cabang</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">50</h2>
                            <p class="text-light mb-0">Dokter</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">200</h2>
                            <p class="text-light mb-0">Petugas Medis</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1500</h2>
                            <p class="text-light mb-0">Total Pasien</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('img/produk.png') }}" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-blue mb-0">Produk </h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('img/perawatan.png') }}" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-blue mb-0">Perawatan</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('img/konsultasi.png') }}" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-blue mb-0">Konsultasi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('img/about-1.jpg') }}" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('img/about-2.jpg') }}" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
                    <h1 class="mb-4">Kenapa Anda Harus Mempercayai Kami? Kenali Kami Lebih Dekat!</h1>
                    <p>Klinik Mitu adalah klinik perawatan kulit yang berdedikasi untuk menyediakan berbagai produk, perawatan, dan konsultasi terbaik bagi kesehatan kulit Anda. Kami memahami betapa pentingnya kesehatan dan kecantikan kulit bagi setiap individu, oleh karena itu kami berkomitmen untuk memberikan pelayanan yang berkualitas dan hasil yang memuaskan.</p>
                    <p class="mb-4">Kami menawarkan berbagai layanan perawatan kulit yang didukung oleh tenaga medis yang berkualitas dan berpengalaman. Produk-produk yang kami gunakan dipilih dengan hati-hati untuk memastikan keamanan dan efektivitasnya. Selain itu, kami juga menyediakan layanan konsultasi profesional untuk membantu Anda memahami kebutuhan kulit Anda dan memilih perawatan yang tepat.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Perawatan Kesehatan Kulit Berkualitas</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Hanya Dokter yang Berkualifikasi</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i> Profesional Penelitian Medis</p>
                    <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Layanan</p>
                <h1>Solusi Perawatan Kulit</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-box text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Produk</h4>
                        <p class="mb-4">Klinik Mitu menyediakan berbagai produk perawatan kulit berkualitas tinggi yang diformulasikan khusus untuk berbagai jenis kulit. Produk-produk kami dibuat dari bahan-bahan alami yang aman dan efektif, dirancang untuk memberikan hasil terbaik bagi kesehatan dan kecantikan kulit Anda.</p>
                        <a class="btn-full" href=""><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-hand-holding-heart text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Perawatan</h4>
                        <p class="mb-4">Kami menawarkan berbagai jenis perawatan kulit yang disesuaikan dengan kebutuhan masing-masing individu. Dari perawatan dasar hingga perawatan khusus untuk masalah kulit tertentu, tim ahli kami akan memastikan Anda mendapatkan perawatan yang paling sesuai untuk kulit Anda, menggunakan teknologi dan metode terbaru.</p>
                        <a class="btn-full" href=""><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-comments text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Konsultasi</h4>
                        <p class="mb-4">Layanan konsultasi di Klinik Mitu dilakukan oleh para profesional yang berpengalaman di bidang perawatan kulit. Kami akan membantu Anda memahami kondisi kulit Anda, memberikan saran yang tepat, dan merancang rencana perawatan yang sesuai untuk mencapai kulit yang sehat dan bercahaya.</p>
                        <a class="btn-full" href=""><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Dokter AI</h4>
                        <p class="mb-4">Klinik Mitu juga menggunakan teknologi canggih dengan layanan Dokter AI, yang membantu dalam menganalisis kondisi kulit Anda secara mendetail dan memberikan rekomendasi perawatan yang akurat. Dokter AI kami dirancang untuk melengkapi konsultasi dengan tenaga medis, memastikan Anda mendapatkan informasi yang komprehensif dan solusi yang optimal untuk masalah kulit Anda.</p>
                        <a class="btn-full" href=""><i class="fa fa-plus text-primary me-4"></i>Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Fitur</p>
                        <h1 class="text-white mb-4">Mengapa Memilih Kami</h1>
                        <p class="text-white mb-4 pb-2">Klinik Mitu adalah pilihan terbaik untuk perawatan kulit Anda. Kami berdedikasi untuk memberikan pelayanan terbaik dengan berbagai keunggulan berikut</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Pengalaman</p>
                                        <h5 class="text-white mb-0">Dokter</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Layanan</p>
                                        <h5 class="text-white mb-0">Berkualitas</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Konsultasi</p>
                                        <h5 class="text-white mb-0">Positif</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Dukungan</p>
                                        <h5 class="text-white mb-0">AI 24 Jam</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Team Start -->
  <!-- Team Start -->
<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Dokter</p>
            <h1>Dokter Berpengalaman Kami</h1>
        </div>
        <div class="row g-4">
            @foreach($dokters as $dokter)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ $dokter->fotoDokter }}" alt="{{ $dokter->namaDokter }}">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>{{ $dokter->namaDokter }}</h5>
                            <p class="text-primary">{{ $dokter->spesialisasiDokter }}</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="#"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square" href="#"><i class="fab fa-github"></i></a>
                                <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Custom "Show More" Button -->
        @if ($dokters->hasMorePages())
            <div class="d-flex justify-content-center mt-4">
                <a href="{{ $dokters->nextPageUrl() }}" class="btn btn-primary">Selengkapnya</a>
            </div>
        @endif
    </div>
</div>

    

    <!-- Team End -->

    <!-- Appointment Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Make An Appointment To Visit Our docter</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choose docter</option>
                                        <option value="1">docter 1</option>
                                        <option value="2">docter 2</option>
                                        <option value="3">docter 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Appointment End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimoni</p>
                <h1>Apa Kata Pasien Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{ asset('img/testimonial-1.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Klinik Mitu memberikan pelayanan yang sangat memuaskan. Dokternya sangat profesional dan ramah. Kulit saya sekarang lebih sehat dan bercahaya. Terima kasih Klinik Mitu!</p>
                        <h5 class="mb-1">Ana Putri</h5>
                        <span class="fst-italic">Pegawai Swasta</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{ asset('img/testimonial-2.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Produk perawatan kulit di Klinik Mitu sangat berkualitas. Saya merasa sangat puas dengan hasilnya. Kulit saya menjadi lebih halus dan bebas dari jerawat.</p>
                        <h5 class="mb-1">Budi Santoso</h5>
                        <span class="fst-italic">Pengusaha</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="{{ asset('img/testimonial-3.jpg') }}" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Konsultasi di Klinik Mitu sangat membantu saya dalam memahami kebutuhan kulit saya. Dokter memberikan saran yang tepat dan saya sangat puas dengan hasilnya.</p>
                        <h5 class="mb-1">Alan Wicaksono</h5>
                        <span class="fst-italic">Mahasiswa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
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
                    <a class="btn btn-link" href="{{ url('/treatment') }}">Perawtan</a>
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
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
