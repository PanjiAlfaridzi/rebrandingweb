<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>WEB Dinas Perikanan Kota Semarang - <?= $judul ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('front-end') ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('front-end') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('front-end') ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('front-end') ?>/assets/css/style.css" rel="stylesheet">

    <style>
        #struktur-organisasi {
        background-color: #fff;
        padding: 80px 15px; /* Mengurangi padding atas untuk mendekatkan ke navbar */
        text-align: center;
        padding-top: 100px;
        /* Mengurangi margin atas untuk mendekatkan ke navbar */

    }

    #struktur-organisasi h2 {
        text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 60px;
            margin-top: 100px;
            /* Added margin-top for spacing from navbar */
            color: #333;
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
        animation: fadeInUp 1.5s ease-out;

    }

        .team-card {
            position: relative;
            margin: 20px;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .team-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .team-card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .team-card-body h4 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .team-card-body p {
            font-size: 16px;
            color: #777;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-links a {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            padding: 10px;
            font-size: 18px;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .social-links a:hover {
            background-color: #0066cc;
            color: #fff;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
        <div class="container">
            <!-- Top Header with Logo -->
            <div class="d-flex align-items-center py-2">
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('logo/logo.png') ?>" alt="Logo Dinas Perikanan" class="me-3" style="width: 50px; height: auto;">
                    <h1 class="logo mb-0">
                        <a href="<?= base_url() ?>" class="text-decoration-none">
                            <span class="fs-4 fw-bold d-block">Dinas Perikanan</span>
                            <span class="fs-6 text-secondary">Kota Semarang</span>
                        </a>
                    </h1>
                </div>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler ms-auto d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    <i class="bi bi-list"></i>
                </button>
            </div>

            <!-- Main Navigation -->
            <nav id="mainNavbar" class="navbar navbar-expand-lg py-0">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100 justify-content-around">
                        <!-- Beranda -->
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url() ?>">Beranda</a>
                        </li>

                        <!-- Profil -->
                        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url('/index.php/Visi') ?>">Visi, Misi dan Tujuan</a></li>
                                <li><a href="<?= base_url('/index.php/Struktur') ?>">Struktur Organisasi</a></li>
                                <li><a href="#">Kepala Dinas</a></li>
                                <li><a href="<?= base_url('/index.php/Tugas') ?>">Tupoksi</a></li>
                                <li><a href="#">Bidang & UPTD</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Kartu Nelayan</a></li>
                                <li><a href="#">Asuransi Nelayan</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url('/index.php/Beritanav') ?>">Berita</a></li>
                                <li><a href="<?= base_url('/index.php/Artikel') ?>">Artikel</a></li>
                                <li><a href="<?= base_url('/index.php/Agenda') ?>">Agenda (Rencana Kegiatan)</a></li>
                                <li><a href="<?= base_url('/index.php/Soprenja') ?>">Sop Renja</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                                <li><a href="<?= base_url('/index.php/Hukumnav') ?>">Dasar Hukum</a></li>
                                <li><a href="<?= base_url('/index.php/Layanannav') ?>">Layanan Informasi</a></li>
                                <li><a href="<?= base_url('/index.php/Berkalanav') ?>">Informasi Berkala</a></li>
                                <li><a href="<?= base_url('/index.php/Mertanav') ?>">Informasi Serta Merta</a></li>
                                <li><a href="<?= base_url('/index.php/Saatnav') ?>">Informasi Setiap Saat</a></li>
                                <li><a href="<?= base_url('/index.php/Kecualinav') ?>">Informasi Dikecualikan</a></li>
                                <li><a href="<?= base_url('/index.php/Profilnav') ?>">Profil PPID</a></li>
                            </ul>
                        </li>

                        <li><a href="<?= base_url('/index.php/nav/Dokumennav') ?>">Dokumen Perencanaan</a></li>
                        <li><a href="#">Peraturan Perundangan</a></li>

                        <li><a href="<?= base_url('/index.php/nav/Gallerynav') ?>"><span>Galeri</span></a>
                        </li>

                        <li><a href="<?= base_url('/index.php/Contact') ?>">Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- ======= Struktur Organisasi Section ======= -->
    <section id="struktur-organisasi">
        <div class="container">
            <h2 data-aos="fade-down">Struktur Organisasi</h2>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col" data-aos="fade-up">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 1">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Kepala Dinas Perikanan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Sekretariat Dinas Perikanan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 3">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Kepala Sub Bagian Perencanaan Evaluasi dan Keuangan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Kepala Sub Bagian Umum dan Kepegawaian</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Bidang Pengelolaan Pembudidayaan Ikan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Bidang Pemberdayaan Usaha Kecil Pembudidayaan Ikan</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <img src="<?= base_url('foto') ?>/admin.png" alt="Member 2">
                        <div class="team-card-body">
                            <h4>Nama</h4>
                            <p>Bidang Perikanan Tangkap</p>
                            <div class="social-links">
                                <a href="#" class="bi bi-facebook"></a>
                                <a href="#" class="bi bi-instagram"></a>
                                <a href="#" class="bi bi-linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="bg-light text-dark py-4">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <!-- Left Section: About, Quick Links, Contact, and Social Media -->
            <div class="d-flex flex-wrap align-items-start">
                <!-- About Section -->
                <div class="footer-about me-4">
                    <h5><i class="bx bx-info-circle"></i> About Us</h5>
                    <p>Terwujudnya Sumberdaya Perikanan dan Masyarakat yang</p>
                    <p>Mampu Menampung Aktivitas Perekonomian</p>
                    <p>Kota Semarang.</p>

                </div>
                <!-- Quick Links Section -->
                <div class="footer-links me-4">
                    <h5><i class="bx bx-link"></i> Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="bx bx-home"></i> Home</a></li>
                        <li><a href="#"><i class="bx bx-cog"></i> Servis</a></li>
                        <li><a href="#"><i class="bx bx-news"></i> Berita</a></li>
                        <li><a href="#"><i class="bx bx-phone"></i> Kontak</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="footer-contact me-4">
                    <h5><i class="bx bx-envelope"></i> Contact</h5>
                    <p>
                        <i class="bx bx-map"></i> Jl. Pemuda No.175, Sekayu, Semarang Tengah<br>
                        <i class="bx bx-mail-send"></i> Email: perikanan@semarangkota.go.id<br>
                        <i class="bx bx-phone"></i> Phone: (024) 3547998
                    </p>
                </div>
                <!-- Social Media Section -->
                <div class="footer-social">
                    <h5><i class="bx bxl-share-alt"></i> Ikuti Kami</h5>
                    <div class="d-flex">
                        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fperikanansmg" class="twitter me-2">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/DinasPerikananKotaSemarang/" class="facebook me-2">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/dinasperikanankotasemarang" class="instagram">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Right Section: Logo -->
            <div class="footer-logo">
                <img src="<?= base_url('logo/Lambang_Kota_Semarang.png') ?>"
                    style="width: 100px; height: auto;"
                    alt="Logo Kota Semarang">
            </div>
        </div>
        <!-- Bottom Section -->
        <div class="text-center mt-3">
            <p>&copy; <?= date('Y') ?> Kominfo Semarang. All Rights Reserved.</p>
        </div>
    </footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url('front-end') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url('front-end') ?>/assets/vendor/aos/aos.js"></script>
<script src="<?= base_url('front-end') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('front-end') ?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('front-end') ?>/assets/js/main.js"></script>

</body>

</html>