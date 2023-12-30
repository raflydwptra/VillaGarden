<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Villa Melati Garden</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Gp/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('Gp/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Gp/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Gp/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Gp/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Gp/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Gp/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Gp/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Gp/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />
    <link href="{{ asset('Gp/assets/css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- =======================================================

  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <!-- Foto Logo -->
            <a href="index.html" class="logo me-auto me-lg-0"><img src="Gp\assets\img\LogoVilla.png" alt=""
                    class="img-fluid"></a>

                    <!-- .navbar -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Galery</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block" style="color: bisque; font-weight: bold;">Hi, {{ auth()->user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"
                            class="dropdown-item has-icon ">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </header><!-- End Header -->

    <!-- ======= Booking section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Villa Melati <span>Garden</span></h1>
                    <h2></h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="{{ route('user.booking.index') }}">Book Now</a></h3>
                    </div>
                </div>
            </div>
    </section><!-- End Booking section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>Deskripsi Singkat Villa Melati Garden</h3>
                        <p class="fst-italic">
                            Villa Melati Garden terletak di Perumahan Taman Melati, jl. Pasir
                            Impun-Sukamiskin, Bandung, merupakan perumahan asri yang terletak
                            diperbukitan, dengan udara bersih dan sejuk. Letaknya berada dipusat
                            wisata populer kota Bandung dan tidak terlalu jauh dari kota Lembang,
                            membuat lokasi Villa Melati Garden menjadi peristirahatan yang sangat menarik
                            dan strategis untuk dikunjungi wisatawan maupun pebisnis.
                            Villa Melati Garden memiliki konsep menarik, dengan design Villa Kayu yang unik,
                            yang dirancang menjadi sebuah penginapan berkonsep Family Guest House yang nyaman
                            dan private bagi anda bersama keluarga.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Deskripsi singkat Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="image col-lg-6" style='background-image: url("Gp/assets/img/afteredit.png");'
                        data-aos="fade-right"></div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-credit-card"></i>
                            <h4>Affordable</h4>
                            <p>dengan harga yang terjangkau, villa ini sangat untuk cocok Keluarga/organisasi yang sedang mencari tempat liburan dengan jumlah orang banyak </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-calendar-event"></i>
                            <h4>Special Event</h4>
                            <p>Selain Villa ini untuk tempat beristirahat, villa ini juga dapat dijadikan tempat untuk berbagai speicial event contohnya seperti (Acara Pernikahan, Ulang Tahun, Gathering, dll)</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-leaf"></i>
                            <h4>Fresh Air</h4>
                            <p>Villa ini dikelilingi oleh tumbuhan hijau, membuat udara disekitar villa ini menjadi sejuk dan nyaman</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-check-shield"></i>
                            <h4>Guaranteed Comfort</h4>
                            <p>Kami menjamin Kenyamanan para customer, karena kenymanan untuk customer adalah prioritas kami</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Deskripsi singkat Section -->

        <!-- ======= Facilities Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Check our Facilities</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-water"></i></div>
                            <h4><a href="">Kolam Renang</a></h4>
                            <p>Kolam Renang Anak (50cm), Dewasa (70-180cm), Ban pelampung dan Peralatan Renang</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-bed"></i></div>
                            <h4><a href="">Kasur</a></h4>
                            <p>King Room (Bed King size 180×200), 2 Kamar</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Ring Basket</a></h4>
                            <p>Area dengan ring basket untuk bermain</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-wifi"></i></div>
                            <h4><a href="">Wifi</a></h4>
                            <p>Anda dapat menikmati WIFI secara gratis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shower"></i></div>
                            <h4><a href="">Shower</a></h4>
                            <p>Anda tidak perlu takut kalau kedinginan, kami sudah menyediakan water heather</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-bowl-rice"></i></div>
                            <h4><a href="">Dapur</a></h4>
                            <p>Dapur Modern (Kitchen set, Kulkas, Kompor, Microwave, Oven, Dispenser dll)</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facilities Section -->

        <!-- ======= Full Facilities Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Our full facilities</h3>
                    <ul>
                        <li class="white-text"
                            > Ruang Tamu dan Teras
                        </li>
                        <li class="white-text"
                            > Gathering Room
                        </li>
                        <li class="white-text"
                            > Family Room
                        </li>
                        <li class="white-text"
                            > Pemancingan Ikan dan perlengkapan pancing
                        </li>
                        <li class="white-text"
                            >Gazebo Taman Belakang
                        </li>
                        <li class="white-text"
                            > Rumah Pohon Anak dan Taman Bermain Anak
                        </li>
                        <li class="white-text"
                            > Mushola
                        </li>
                        <li class="white-text"
                            > Perapian dan Alat Barbeque
                        </li>
                </div>

            </div>
        </section><!-- End Full Facilities Section -->

        <!-- ======= Dokumentasi Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Villa</h2>
                    <p>Check our Villa</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach($types as $type)
                                <li data-filter=".filter-{{ strtolower($type) }}">{{ $type }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($gallery->type) }}">
                            <div class="portfolio-wrap">
                                <img src="{{ asset($gallery->image) }}" class="img-fluid" alt="{{ $gallery->name }}" width="416" height="225">
                                <div class="portfolio-info">
                                    <h4>{{ $gallery->name }}</h4>
                                    <div class="portfolio-links">
                                        <a href="{{ asset($gallery->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $gallery->name }}"><i class="bx bx-fullscreen"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </section><!-- End Dokumentasi Section -->

        <!-- ======= Peraturan Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right" data-aos-delay="100"></div>
                    <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>Rules in Villa Melati Garden</h3>
                                <ul>
                                    <li class="black-text"
                                        > Check-in jam 13.00, Check-out jam 12.00
                                    </li>
                                    <li class="black-text"
                                        > Pembayaran Villa harus sudah lunas pada saat check-in.
                                    </li>
                                    <li class="black-text"
                                        > Lokasi Villa Melati Garden berada di area permukiman warga,
                                        diharapkan tamu tidak menimbulkan kesan kerumunan seperti sorak-sorai dan berteriak-teriak yg mengganggu warga.
                                    </li>
                                    <li class="black-text"
                                        > Sound System, Electone, atau berkaraoke hanya di perkenankan dari pagi hingga jam 18.00 (sebelum magrib).
                                    </li>
                                    <li class="black-text"
                                        > Membawa Sound System, Keyboard dll. dikenakan biaya Tambahan.
                                    </li>
                                    <li class="black-text"
                                        > Acara berenang dan barbeque di Area Taman hanya diperkenankan hingga jam 21.00
                                    </li>
                                    <li class="black-text"
                                        > Kegiatan yg diikuti oleh peserta lebih dari 20 orang, sebaiknya dilakukan di Aula.
                                    </li>
                                    <li class="black-text"
                                        > Kegiatan wedding, lamaran, ulang tahun, reuni dll dengan jumlah tamu lebih dari 40 orang, hrs mengajukan izin kepada tetangga.
                                    </li>
                            </div>

                        </div><!-- End peraturan section-->
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($feedbacks as $feedback)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                    <h3>{{ $feedback->name }}</h3>
                                    <h4>{{ $feedback->subject }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $feedback->message }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.077869102251!2d107.6765333!3d-6.8882713!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ddd53bf49975%3A0xbca0d46b0fc31de6!2sVilla%20Melati%20Garden!5e0!3m2!1sen!2sid!4v1702650776855!5m2!1sen!2sid"
                        width="1293" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Komp. Taman Melati Jl. Pasir Impun No.8 Blok D3, Cikadut, Kec. Cimenyan, Kota
                                    Bandung, Jawa Barat 40194</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>villamelatigarden@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{ route('user.feedback.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name"
                                        placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" required>

                                        @error('name')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email"
                                        placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" required>

                                        @error('email')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="subject"
                                    placeholder="Subject" class="form-control @error('subject') is-invalid @enderror" required>

                                    @error('subject')
                                        <div class="invalid-feedback" style="display: block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" value="{{ old('message') }}" class="form-control @error('message') is-invalid @enderror" required>
                                </textarea>
                                @error('message')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning" onclick="validateForm()">Send Message</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;

            if (name === "" || email === "" || subject === "" || message === "") {
                var invalidElements = document.querySelectorAll('.is-invalid');
                if (invalidElements.length > 0) {
                    hasError = true;
                }

                Swal.fire({
                    title: "Feddback Gagal Dikirim",
                    text: "Semua Field Harus Diisi",
                    icon: "error"
                });
            } else {
                Swal.fire({
                    title: "Feddback Berhasil Dikirim",
                    text: "Feedback anda akan kami proses secepatnya",
                    icon: "success"
                });
            }
        }
    </script>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Gp/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('Gp/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Gp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Gp/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Gp/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Gp/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Gp/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Gp/assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
