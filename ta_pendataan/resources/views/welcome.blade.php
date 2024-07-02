<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title for this document -->
    <title>APLIKASI PENDATAAN</title>
    <!-- favicon for this document -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <!-- keywords for this document -->
    <meta name="keywords" content="android app, app, app landing, App Showcase, app website, digital">
    <!-- description for this document -->
    <meta name="description" content="Software and App Landing Pages HTML Template">
    <!-- author of this document -->
    <meta name="auhtor" content="PixelAxis">

    <!-- bootstrap 5 minified css source -->
    <link rel="stylesheet" href="assetdepan/css/vendor/bootstrap.min.css">
    <!-- font awesome 5 icons minified css source -->
    <link rel="stylesheet" href="assetdepan/icons/css/all.min.css">
    <!-- jquery nice select css source -->
    <link rel="stylesheet" href="assetdepan/css/vendor/nice-select.css">
    <!-- magnific popup-1.1.0 css source -->
    <link rel="stylesheet" href="assetdepan/css/vendor/magnific-popup.css">
    <!-- owl carousel-2.3.4 minified css source -->
    <link rel="stylesheet" href="assetdepan/css/vendor/owl.carousel.min.css">
    <!-- owl carousel-2.3.4 theme default minified css source -->
    <link rel="stylesheet" href="assetdepan/css/vendor/owl.theme.default.min.css">
    <!-- animate-4.1.1 minified css source -->
    <link rel="stylesheet" href="assetdepan/css/vendor/animate.min.css">
    <!-- custom css source -->
    <link rel="stylesheet" href="assetdepan/css/main.css">
</head>

<body>
    <!-- header section start -->
    <header>
        <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Logo" class="logo">
                </a>
                <div class="d-flex flex-row align-items-center order-2 order-lg-3">
                @if (Auth::guest())
                <a class="d-none d-md-block download button" href="login">Login</a>
                @elseif (Auth::user()->level =='admin')
                <a class="d-none d-md-block download button" href="{{ route('admin.home') }}">Dashboard</a>
                @endif
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                        aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse align-items-center justify-content-end order-3 order-lg-2"
                    id="primaryNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Tentang Website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#prodi">Tentang Prodi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header section end -->

    <!-- hero section start -->
    <section class="hero bg-img" data-background="assetdepan/images/hero/hero-bg.png">
        <div class="container">
            <div class="hero__area">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7">
                        <div class="hero__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Homepage</h6>
                            <h1 class="wow animate__animated animate__fadeInUp">Welcome To This Website</h1>
                            <p class="large wow animate__animated animate__fadeInUp">
                               Selamat Datang di website pendataan mahasiswa dijurusan teknik informatika universitas negeri manado
                            </p>
                           </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__img wow animate__animated animate__fadeInTopRight">
            <img src="assetdepan/images/hero/circle.png" alt="circle" class="hero__circle">
            <img src="assetdepan/images/hero/wallet.png" alt="Wallet" class="hero__wallet">
            <img src="assetdepan/images/2.png" alt="mockup" height="150" class="hero__mock">
        </div>
    </section>
    <!-- hero section end -->

    <!-- client slider start -->
    <!-- invest section start -->
    <section class="invest" id="about">
        <div class="container">
            <div class="invest__area">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="invest__thumb wow animate__animated animate__fadeInLeft">
                            <img src="assetdepan/images/3.png" alt="Invest">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="invest__content">
                            <h6 class="wow animate__animated animate__fadeInUp">About
                            </h6>
                            <h2 class="wow animate__animated animate__fadeInUp">Informasi Singkat Mengenai Website</h2>
                            <p class="wow animate__animated animate__fadeInUp">Aplikasi pendataan mahasiswa dapat membuat pekerjaan para staf pekerja kampus menjadi lebih mudah dan bisa digunakan dimana-saja. Pemakaian atau penggunaan aplikasi berbasis web sehingga dapat diakses melalui komputer maupun smartphone selagi memiliki koneksi internet. Dengan demikian aplikasi pendataan mahasiswa dibuat untuk memudahkan para dosen, maupun staf pekerja lainnya untuk melihat data-data dari mahasiwa tanpa harus pergi ke kampus ataupun ke bagian kemahasiswaan.</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- invest section end -->

    <!-- wallet section start -->
    <section class="wallet bg-img" id="prodi" data-background="assetdepan/images/wallet/wallet-bg.png">
        <div class="container">
            <div class="wallet__area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wallet__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Prodi
                            </h6>
                            <h2 class="wow animate__animated animate__fadeInUp">Visi & Misi Prodi Teknik Informatika</h2>
                            <p class="wow animate__animated animate__fadeInUp">Visi : <br> Pada Tahun 2022 menjadi Program Studi penghasil tenaga ahli Teknik Informatika yang berkarakter, inovatif, dan unggul kompetitif.
							<br> Misi :
							<br>1.Melaksanakan dan mengembangkan kegiatan pengabdian kepada masyarakat di bidang Teknik Informatika yang berkarakter, inovatif, dan unggul kompetitif.
							<br>2.Melaksanakan dan mengembangkan penelitian di bidang Teknik Informatika yang berkarakter, inovatif, dan unggul kompetitif.
							<br>3.Melaksanakan dan mengembangkan kegiatan pengabdian kepada masyarakat di bidang Teknik Informatika yang berkarakter, inovatif, dan unggul kompetitif.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="wallet__thumb">
                            <img src="assetdepan/images/1.jpg" alt="Future Wallet">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wallet section end -->

    <!-- footer start -->
    <footer class="bg-img" data-background="assetdepan/images/footer-bg.png">
        <div class="container">
            <div class="footer__area">
                <div class="footer__links wow animate__animated animate__fadeInUp">
                    <a href="#">Home</a>
                    <a href="#about">Tentang Website</a>
                    <a href="#prodi">Prodi</a>
                    <a href="Login">Login</a>
                </div>
                <div class="footer__credit wow animate__animated animate__fadeInUp">
                    <p class="text-center">Copyright © <span class="currentYear"></span>.All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Scroll To Top -->
    <a href="javascript:void(0)" class="scrollToTop">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <!-- jquery-3.6.0 minified source -->
    <script src="assetdepan/js/vendor/jquery.min.js"></script>
    <!-- bootstrap 5 minified bundle js source -->
    <script src="assetdepan/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- nice select minified js source -->
    <script src="assetdepan/js/vendor/jquery.nice-select.min.js"></script>
    <!-- owl carousel-2.3.4 minified js source -->
    <script src="assetdepan/js/vendor/owl.carousel.min.js"></script>
    <!-- magnific popup-1.1.0 js source -->
    <script src="assetdepan/js/vendor/jquery.magnific-popup.min.js"></script>
    <!-- wow-1.1.3 minified js source -->
    <script src="assetdepan/js/vendor/wow.min.js"></script>
    <!-- custom js source -->
    <script src="assetdepan/js/main.js"></script>
</body>

</html>