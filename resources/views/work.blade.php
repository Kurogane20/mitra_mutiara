<!DOCTYPE html>
<html lang="en">
<header>
    <title>Mitra Mutiara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="{{ asset('page_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{ asset('page_assets/css/boxicon.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">    
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{asset('page_assets/css/templatemo.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('page_assets/css/custom.css') }}">

    <!-- Tambahkan ini di dalam <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--
    TemplateMo 561 Purple Buzz
    https://templatemo.com/tm-561-purple-buzz
    -->
</header>
<body>
    <!-- Navbar -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand h1" href="index.html">
                <i class='bx bx-sm text-dark'></i>
                <span class="text-dark h4"><img src="{{ asset('page_assets/img/apple-icon.png') }}" alt="mitra mutiara"> </span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/work">Work</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="pricing.php">Pricing</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <!-- <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a> -->
                    <a class="nav-link" href="/login"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
        <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
            <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Our Work</h1>
                <h3 class="h4 pb-2 regular-400">Berikut merupakan beberapa layanan yang kami sediakan</h3>
                <p class="banner-body pb-2 light-300">
                Kami menyediakan berbagai solusi teknologi dan konstruksi yang dirancang untuk memenuhi kebutuhan bisnis Anda. Dengan pendekatan yang inovatif dan berfokus pada kualitas, kami membantu menciptakan hasil yang efektif dan efisien untuk setiap proyek.
                </p>
                <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Learn More</button>
                <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Contact Us</button>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Our Work -->
    <section class="container py-5">
        <div class="row justify-content-center my-5">
            <div class="filter-btns shadow-md rounded-pill text-center col-auto">
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">All</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Sistem-Pengolahan-Air" href="#">Sistem Pengolahan Air</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Pemantauan-Lingkungan" href="#">Pemantauan Lingkungan</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Konstruksi-Rekayasa" href="#">Konstruksi dan Rekayasa</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Pengembangan-Teknologi" href="#">Pengembangan Teknologi</a>
            </div>
        </div>

        <div class="row projects gx-3 gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-4">
        <a href="javascript:void(0);" class="col text-decoration-none project Sistem-Pengolahan-Air">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{('page_assets/img/work/01.jpg') }}" alt="..." >
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>Water Recycling Unit</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                        Sistem pengolahan air yang dirancang untuk mendaur ulang air yang digunakan dalam kegiatan industri atau domestik. Unit ini mengurangi penggunaan air bersih dengan memproses dan mengembalikan air yang sudah dipakai agar dapat digunakan kembali untuk keperluan non-konsumsi.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>
        <a href="javascript:void(0);" class="col text-decoration-none project Sistem-Pengolahan-Air">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{asset('page_assets/img/work/02.jpg') }}" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>Waste Water Treatment</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                    Proses pengolahan air limbah untuk menghilangkan bahan-bahan berbahaya dan menciptakan air yang lebih aman sebelum dibuang ke lingkungan. Sistem ini dapat digunakan oleh industri, perumahan, atau fasilitas publik untuk mengurangi dampak negatif terhadap lingkungan.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>
        <a href="javascript:void(0);" class="col text-decoration-none project Pemantauan-Lingkungan">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{('page_assets/img/work/03.png') }}" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>Online Water Monitoring</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                    Sistem pemantauan kualitas air secara real-time menggunakan sensor dan perangkat lunak untuk mengukur parameter seperti pH, suhu, oksigen terlarut, dan tingkat kontaminasi. Sistem ini membantu memantau dan mengontrol kualitas air dalam berbagai aplikasi, mulai dari industri hingga pengelolaan sumber daya alam.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>
        <a href="javascript:void(0);" class="col text-decoration-none project Pemantauan-Lingkungan">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{('page_assets/img/work/04.jpg')}}" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>AQMS (Air Quality Monitoring System)</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                    Sistem pemantauan kualitas udara yang mengukur berbagai parameter seperti polusi udara, kadar gas berbahaya, dan partikel di udara. AQMS memungkinkan pengawasan lingkungan yang lebih efektif dan dapat membantu memastikan udara yang bersih dan sehat.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>
        <a href="javascript:void(0);" class="col text-decoration-none project Pemantauan-Lingkungan">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{('page_assets/img/work/05.jpg')}}" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>CEMS (Continuous Emission Monitoring System)</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                    Sistem yang digunakan untuk memantau emisi gas secara terus-menerus di industri, terutama yang beroperasi dalam sektor energi dan manufaktur. CEMS mengukur konsentrasi gas buang, seperti CO2, NOx, dan SO2, untuk memastikan kepatuhan terhadap peraturan lingkungan.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>
        <a href="javascript:void(0);" class="col text-decoration-none project Konstruksi-Rekayasa">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{('page_assets/img/work/06.jpg')}}" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>Engineering Procurement Requirement</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                    Layanan yang menyediakan solusi teknik dan pengadaan untuk berbagai proyek industri, yang mencakup perencanaan, desain, pemilihan bahan, dan pengadaan peralatan yang dibutuhkan untuk mendukung proyek konstruksi atau pengembangan teknologi.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>
        <a href="javascript:void(0);" class="col text-decoration-none project Konstruksi-Rekayasa">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{('page_assets/img/work/07.jpg')}}" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>Construction</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                    Jasa konstruksi yang mencakup pembangunan gedung, jalan, jembatan, dan infrastruktur lainnya. Layanan ini meliputi desain, manajemen proyek, serta implementasi konstruksi yang efisien dan sesuai dengan standar kualitas dan keamanan.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>
        <a href="javascript:void(0);" class="col text-decoration-none project Pengembangan-Teknologi">
            <div class="service-work overflow-hidden card mb-3">
                <img class="card-img-top" src="{{('page_assets/img/work/08.jpg')}}" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark"><strong>IT Development</strong></h5>
                    <p class="card-text light-300 text-dark description-card-work">
                    Pengembangan solusi teknologi informasi untuk mendukung berbagai kebutuhan bisnis. Layanan ini mencakup pembuatan aplikasi, pengembangan perangkat lunak, integrasi sistem, serta solusi digital lainnya untuk meningkatkan efisiensi dan produktivitas organisasi.
                    </p>
                    <span class="text-decoration-none text-primary light-300 read-more-btn">
                        Read more
                    </span>
                </div>
            </div>
        </a>

            
        </div>

            <!-- <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project graphic social">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-02.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Corporate Branding</h5>
                        <p class="card-text light-300 text-dark">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-03.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Leading Digital Solution</h5>
                        <p class="card-text light-300 text-dark">
                            Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiatdolore eu fugiat nulla pariatur.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project social business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-04.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Smart Applications</h5>
                        <p class="card-text light-300 text-dark">
                            Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-05.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Corporate Stationary</h5>
                        <p class="card-text light-300 text-dark">
                            Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-06.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">8 Financial Tips</h5>
                        <p class="card-text light-300 text-dark">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
        
        <div class="row">
            <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary text-white">Previous</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-light">1</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary text-white">2</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-secondary text-white">Next</button>
                </div>
            </div>
        </div> -->
    </section>
    <!-- End Our Work -->

    <!-- Start Feature Work -->
    <!-- <section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h3 class="feature-work-title h4 text-muted light-300">Featured Work</h3>
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Transform with us</h1>
                    <p class="feature-work-body text-muted light-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                        ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="feature-work-footer text-muted light-300">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="./assets/img/feature-work-1-large.jpg">
                            <img class="img-fluid" src="./assets/img/feature-work-1.jpg">
                        </a>
                        <a class="col" data-type="image" data-fslightbox="gallery" href="./assets/img/feature-work-2-large.jpg">
                            <img class="img-fluid" src="./assets/img/feature-work-2.jpg">
                        </a>
                    </div>
                    <div class="row pt-4">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="./assets/img/feature-work-3-large.jpg">
                            <img class="img-fluid" src="./assets/img/feature-work-3.jpg">
                        </a>
                        <a class="col" data-type="image" data-fslightbox="gallery" href="./assets/img/feature-work-4-large.jpg">
                            <img class="img-fluid" src="./assets/img/feature-work-4.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Feature Work -->


    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

            <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">MITRA</span> <span class="text-light h5 semi-bold-600">MUTIARA</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        PT. Mitra Mutiara
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.php">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.php">About Us</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.php">Work</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.php">Price</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.php">Contact</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Sistem Pengolahan air</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Pemantauan Lingkungan</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Konstruksi dan Rekayasa</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Pengembangan Teknologi</a>
                        </li>
                        <!-- <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>
                        </li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">Marketing</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">marketing@mitramutiara.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="{{ asset('page_assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Lightbox -->
    <script src="{{ asset('page_assets/js/fslightbox.js') }}"></script>
    <script>
        fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;
    </script>
    <!-- Load jQuery require for isotope -->
    <script src="{{asset('page_assets/js/jquery.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('page_assets/js/isotope.pkgd.js')}}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="{{ asset('page_assets/js/templatemo.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('page_assets/js/custom.js') }}"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".read-more-btn").forEach(function(button) {
        button.addEventListener("click", function() {
            let description = this.previousElementSibling; // Ambil elemen deskripsi
            let card = this.closest(".service-work"); // Ambil card parent
            
            description.classList.toggle("expanded");
            card.classList.toggle("expanded"); // Naikkan card ke lapisan atas

            // Ubah teks tombol Read More / Read Less
            if (description.classList.contains("expanded")) {
                this.innerHTML = "Read less <i class='bx  ms-1'></i>";
            } else {
                this.innerHTML = "Read more <i class='bx  ms-1'></i>";
                card.classList.remove("expanded"); // Kembalikan card ke normal jika Read Less diklik
            }
        });
    });
});
    </script>

</body>

</html>