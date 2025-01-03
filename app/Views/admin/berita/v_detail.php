<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEB Dinas Perikanan Kota Semarang- <?= $judul ?></title>
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
        /* Berita Styles */
        .berita-detail {
            padding: 40px 0;
            background: #f8f9fa;
        }

        .entry {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .entry-img-container {
            width: 100%;
            height: 450px;
            /* Fixed height */
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .entry-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.3s ease;
        }

        .entry-img:hover {
            transform: scale(1.02);
        }

        .entry-title {
            color: #2c4964;
            font-size: 28px;
            font-weight: 700;
            margin-top: 20px;
        }

        .entry-meta {
            margin: 15px 0;
            color: #777;
        }

        .entry-meta span {
            margin-right: 20px;
            font-size: 14px;
        }

        .entry-meta i {
            color: #5fcf80;
            margin-right: 5px;
        }

        .entry-content {
            color: #444;
            line-height: 1.8;
            font-size: 16px;
        }

        .entry-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .article-tags a {
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 20px;
            color: #5fcf80;
            margin-right: 8px;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .article-tags a:hover {
            background: #5fcf80;
            color: #fff;
        }

        .article-share {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .share-icon {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #fff;
            transition: transform 0.3s;
        }

        .share-icon:hover {
            transform: translateY(-3px);
        }

        .share-icon.facebook {
            background: #3b5998;
        }

        .share-icon.twitter {
            background: #1da1f2;
        }

        .share-icon.whatsapp {
            background: #25d366;
        }

        .berita-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            padding: 20px 0;
        }

        .btn-nav {
            padding: 10px 20px;
            background: #5fcf80;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-nav:hover {
            background: #3ac162;
            color: #fff;
            transform: translateY(-2px);
        }

        .berita-not-found {
            text-align: center;
            padding: 60px 0;
        }

        .berita-not-found i {
            font-size: 60px;
            color: #5fcf80;
            margin-bottom: 20px;
        }

        .berita-not-found h3 {
            color: #2c4964;
            margin-bottom: 10px;
        }

        .btn-back-home {
            display: inline-block;
            padding: 12px 30px;
            background: #5fcf80;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: all 0.3s;
        }

        .btn-back-home:hover {
            background: #3ac162;
            color: #fff;
            transform: translateY(-2px);
        }

        /* Breadcrumbs styling */
        .breadcrumbs {
            margin-top: 80px;
            padding: 30px 0;
            background: linear-gradient(135deg, #5fcf80 0%, #3ac162 100%);
            color: #fff;
        }

        .breadcrumbs h2 {
            font-size: 28px;
            font-weight: 600;
        }

        .breadcrumbs p {
            margin: 0;
            opacity: 0.8;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .entry-img-container {
                height: 300px;
            }

            .entry {
                padding: 20px;
            }

            .entry-title {
                font-size: 24px;
            }

            .entry-footer {
                flex-direction: column;
                gap: 20px;
            }
        }

        /* Styling untuk text dalam kolom */
        .entry-content {
            /* Format dasar */
            text-align: justify;
            /* Membuat text rata kiri-kanan */
            white-space: pre-line;
            /* Menghormati line break */
            word-wrap: break-word;
            /* Memastikan kata panjang tidak overflow */
            overflow-wrap: break-word;

            /* Spacing */
            line-height: 1.6;
            /* Jarak antar baris */
            letter-spacing: 0.3px;
            /* Jarak antar huruf */

            /* Padding dan margin */
            padding: 15px;
            margin: 0;

            /* Format paragraf */
            text-indent: 30px;
            /* Indent awal paragraf */
        }

        /* Memastikan paragraf terformat dengan baik */
        .entry-content p {
            margin-bottom: 1.5em;
            /* Menambahkan spasi 1.5em di bawah setiap paragraf */
            margin-top: 0;
            line-height: 1.6;
            /* Mengatur jarak antar baris dalam paragraf */
        }

        /* Mengatur list jika ada */
        .entry-content ul,
        .entry-content ol {
            padding-left: 20px;
            margin: 1em 0;
        }

        /* Mengatur heading jika ada */
        .entry-content h1,
        .entry-content h2,
        .entry-content h3,
        .entry-content h4,
        .entry-content h5,
        .entry-content h6 {
            margin: 1em 0 0.5em 0;
            line-height: 1.4;
        }

        /* Mengatur tabel jika ada */
        .entry-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 1em 0;
        }

        .entry-content td,
        .entry-content th {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .offcanvas {
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi pada offcanvas */
            color: black;
        }
        .offcanvas-header {
            justify-content: flex-end;
        }
        .offcanvas-body .nav-item {
            margin: 10px 0;
        }
        .offcanvas-body .nav-link {
            color: black;
            background-color: #e9ecef;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            display: block;
        }
        .offcanvas-body .nav-link:hover {
            color: #1e90ff;
            background-color: #dee2e6;
        }
        .offcanvas-body .nav-link.active {
            color: #1e90ff;
            background-color: #dee2e6;
        }
        .btn.btn-secondary {
            flex: 0 1 auto;
            background-color: white;
            border-color: white;
        }
        .btn.btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.8); /* Warna tombol saat hover */
            border-color: rgba(255, 255, 255, 0.8);
        }
    </style>

    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <nav class="navbar navbar-light ms-5 me-2"> <!-- navbar-light untuk teks gelap -->
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('logo/logo.png') ?>" alt="Logo Dinas Perikanan" style="height: 40px;">
        </a>
        <ul class="navbar-nav-center">
            <li class="nav-item">
                <a class="nav-link active" id="nav-beranda" href="<?= base_url() ?>">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/index.php/Visi') ?>">Visi, Misi dan Tujuan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Struktur') ?>">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#">Kepala Dinas</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Tugas') ?>">Tupoksi</a></li>
                            <li><a class="dropdown-item" href="#">Bidang & UPTD</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu" aria-labelledby="layananDropdown">
                    <li><a class="dropdown-item" href="#">Kartu Nelayan</a></li>
                    <li><a class="dropdown-item" href="#">Asuransi Nelayan</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi</a>
                <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/index.php/Beritanav') ?>">Berita</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Artikel') ?>">Artikel</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Agenda') ?>">Agenda (Rencana Kegiatan)</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/Soprenja') ?>">Sop Renja</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="ppidDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PPID</a>
                <ul class="dropdown-menu" aria-labelledby="ppidDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Hukumnav') ?>">Dasar Hukum</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Layanannav') ?>">Layanan Informasi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Berkalanav') ?>">Informasi Berkala</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Mertanav') ?>">Informasi Serta Merta</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Saatnav') ?>">Informasi Setiap Saat</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Kecualinav') ?>">Informasi Dikecualikan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/index.php/nav/Profilnav') ?>">Profil PPID</a></li>
                </ul>
            </li>
        </ul>
        
        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/index.php/nav/Dokumennav') ?>">Dokumen Perencanaan</a>
                </li>

                <!-- Peraturan Perundangan -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Peraturan Perundangan</a>
                </li>

                <!-- Galeri -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/index.php/nav/Gallerynav') ?>">Galeri</a>
                </li>

                <!-- Kontak -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/index.php/Contact') ?>">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</header>


    <!-- Main Content -->
    <main id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2><?= $type_berita ?></h2>
                <p><?= $type_berita ?> dari Dinas Perikanan Kota Semarang </p>
            </div>
        </div>

        <!-- ======= Detail Berita Section ======= -->
        <section class="berita-detail pt-4">
            <div class="container">
                <?php if (isset($berita) && !empty($berita)): ?>
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <!-- Berita Card -->
                            <article class="entry">
                                <!-- Berita Image Container -->
                                <div class="entry-img-container mb-4">
                                    <img src="<?= base_url('image/iberita/' . $berita['gambar_berita']) ?>"
                                        alt="<?= $berita['judul_berita'] ?>"
                                        class="entry-img">
                                </div>

                                <h2 class="entry-title mb-3">
                                    <?= $berita['judul_berita'] ?>
                                </h2>

                                <div class="entry-meta mb-4">
                                    <span><i class="bi bi-calendar-event"></i> <?= date('d F Y', strtotime($berita['tgl_berita'])) ?></span>
                                    <span><i class="bi bi-clock"></i> <?= date('H:i', strtotime($berita['jam_berita'])) ?></span>
                                    <span><i class="bi bi-person"></i> Admin</span>
                                </div>

                                <div class="entry-content">
                                    <?= $berita['isi_berita'] ?>
                                </div>

                                <!-- Tags & Share -->
                                <div class="entry-footer mt-4">
                                    <div class="article-tags">
                                        <i class="bi bi-tags"></i>
                                        <a href="#">Perikanan</a>
                                        <a href="#">Berita</a>
                                    </div>

                                    <div class="article-share">
                                        <span>Bagikan:</span>
                                        <a href="#" class="share-icon facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="share-icon twitter"><i class="bi bi-twitter"></i></a>
                                        <a href="#" class="share-icon whatsapp"><i class="bi bi-whatsapp"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="berita-not-found">
                        <i class="bi bi-journal-x"></i>
                        <h3>Berita Tidak Ditemukan</h3>
                        <p>Maaf, berita yang Anda cari tidak tersedia</p>
                        <a href="<?= base_url('home') ?>" class="btn-back-home">Kembali ke Beranda</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>






    <!-- Profile-->
    <main id="main">

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-1 content">
                        <h3>Tentang Kami</h3>
                        <p class="fst-italic">
                            Dinas Perikanan Kota Semarang Jl. Pemuda No.175, Sekayu, Semarang Tengah,
                            Kota Semarang, Jawa Tengah 50132 (024) 3547998
                        </p>
                    </div>
                    <div class="col-lg-6 order-2" data-aos="fade-left" data-aos-delay="100">
                        <img src=<?= base_url('logo/about.jpg') ?> class=" img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
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