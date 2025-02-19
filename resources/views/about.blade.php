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
    <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start">
                    <h1 class="h2 py-5 text-primary typo-space-line">About Us</h1>
                    <p class="light-300" style="text-align: justify;">
                    PT. Mitra Mutiara yang didirikan pada tahun 2017 dengan latar belakang yang kuat memiliki visi untuk menciptakan perusahaan yang dapat memberikan solusi jasa di Indonesia. Produk dan layanan PT. Mitra Mutiara yang bermula dari jasa konstruksi, saat ini telah mengembangkan jasa lainnya baik dibidang teknologi IoT, teknologi lingkungan dan IT development. Melihat peluang besar di pasar di bidang teknologi, PT. Mitra Mutiara mulai melakukan ekspansi bisnis ke bidang lain. PT. Mitra Mutiara mengembangkan berbagai produk inovatif, termasuk aplikasi mobile untuk bisnis dan solusi cloud computing. Produk-produk ini membantu perusahaan tetap relevan di tengah persaingan yang semakin ketat. Seiring dengan perkembangan teknologi dan kebutuhan pasar, PT. Mitra Mutiara melakukan transformasi digital secara menyeluruh. Perusahaan memperkenalkan platform e-management dan layanan digital untuk tetap berkomitmen dengan pelanggan. Saat ini, PT. Mitra Mutiara telah berkembang menjadi salah satu perusahaan teknologi informasi karyawan dan pelanggan setia di seluruh Indonesia. Kami terus berkomitmen untuk menghadirkan solusi teknologi yang inovatif dan berkelanjutan untuk masa depan yang lebih baik.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('page_assets/img/banner-img-02.svg') }}">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Team Member -->
    <section class="container py-5">
        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

            <div class="col-lg-3">
                <h2 class="h2 py-5 typo-space-line">Our Team</h2>
                <p class="text-muted light-300">
                Berikut adalah tim kami yang profesional, berpengalaman, dan siap memberikan solusi terbaik.
                </p>
            </div>

            <div class="col-lg-9 row">
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4" src="{{asset('page_assets/img/team-03.jpg') }}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li>M Dimas Bagaskoro</li>
                    <li><a href="mailto:bagas@mitramutiara.co.id" class="text-muted">bagas@mitramutiara.co.id</a></li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4" src="{{ ('page_assets/img/team-03.jpg') }}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li>Novri Darsono</li>
                    <li><a href="mailto:novri@mitramutiara.co.id" class="text-muted">novri@mitramutiara.co.id</a></li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4" src="{{ ('page_assets/img/team-03.jpg') }}" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li>Hasta C Susila</li>
                    <li><a href="mailto:hasta@mitramutiara.co.id" class="text-muted">hasta@mitramutiara.co.id</a></li>
                </ul>
            </div>
            </div>
        </div>
    </section>
    <!-- End Team Member -->
    <!-- Start Choice -->
    <section class="why-us banner-bg bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="banner-img col-lg-5">
                    <img src="{{asset('page_assets/img/work.svg') }}" class="rounded img-fluid" alt="">
                </div>
                <div class="banner-content col-lg-7 align-self-end">
                    <h2 class="h2 pb-3">Why you choose us?</h2>
                    <p class="text-muted pb-5 light-300">
                    Kami berkomitmen memberikan <strong>layanan berkualitas dan inovatif</strong> dengan menciptakan <strong> lingkungan kerja yang aman, peluang pengembangan bagi karyawan, serta menjalin kemitraan yang kuat</strong>. Dengan keahlian di bidang <strong> konstruksi, IoT, teknologi lingkungan, dan IT solutions</strong>, kami terus meningkatkan kapabilitas untuk tetap kompetitif.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choice -->

    <section>
    <div class="container">
        <div class="row d-flex align-items-center py-3">
            <div class="col-lg-12 text-start">
                <h1 class="h2 py-3 text-primary">
                    <i class="fas fa-eye"></i> Vision
                </h1>
                <div class="bg-light p-4 rounded shadow-sm">
                    <p class="light-300" style="text-align: justify;">
                        Menjadi perusahaan yang amanah dan mampu memberikan kepuasan kepada pelanggan melalui produk serta pelayanan yang berkualitas dan inovatif.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section>
        <div class="container">
            <div class="row d-flex align-items-center py-3">
                <div class="col-lg-12 text-start">
                    <h1 class="h2 py-3 text-primary">
                        <i class="fas fa-bullseye"></i> Mission
                    </h1>
                    <div class="bg-light p-4 rounded shadow-sm">
                        <ul class="light-300 list-unstyled text-start">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary"></i>  Memberikan pelayanan yang berkualitas dan inovatif.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary"></i>  Memberikan lingkungan kerja yang aman dan nyaman, meningkatkan kesejahteraan, serta memberikan kesempatan berkembang kepada karyawan.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary"></i>  Meningkatkan kapabilitas dan daya saing di bidang pembangunan gedung, jalan, dan jembatan melalui pengembangan kompetensi SDM.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary"></i>  Menciptakan hubungan kerja sama yang kuat dengan pelanggan & mitra kerja.</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary"></i>  Menjaga keseimbangan lingkungan dengan memperhatikan dampak lingkungan dan sosial.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Start Aim -->
    <!-- <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-bulb text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Vision</h2>
                    <p class="light-300">
                        Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class='display-4 bx bx-revision text-light'></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Mission</h2>
                    <p class="light-300">
                        Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam quis.
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-select-multiple text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Goal</h2>
                    <p class="light-300">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.
                    </p>
                </div>

            </div>
        </div>
    </section> -->
    <!-- End Aim -->

    <!-- Start Our Partner -->
    <!-- <section class="bg-secondary py-3">
        <div class="container py-5">
            <h2 class="h2 text-white text-center py-5">Our Partner</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 text-white bx bxs-buildings'></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 bx text-white bxs-check-shield bx-lg'></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 text-white bx bxs-bolt-circle'></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 text-white bx bxs-spa'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--End Our Partner-->

    <!-- Start Progress -->
    <!-- <section class="bg-white py-5">
        <div class="container my-4">

            <h1 class="creative-heading h2 pb-3">Creative & Make Perfect</h1>

            <div class="creative-content row py-3">
                <div class="col-md-5">
                    <p class="text-muted col-lg-8 light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus.
                    </p>
                </div>
                <div class="creative-progress col-md-7">

                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Development</h4>
                        </div>
                        <div class="col-6 text-right">66%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Design</h4>
                        </div>
                        <div class="col-6 text-right">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>


                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Marketing</h4>
                        </div>
                        <div class="col-6 text-right">74%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!-- End Progress -->

    

    <!-- Start Contact -->
    {{-- <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto my-4 p-3">
                    <form action="#" method="get"><h1 class="h2 text-center">Stay up to date with us</h1>
                    <div class="input-group py-3">
                    
                        <input name="email" type="text" class="form-control form-control-lg rounded-pill rounded-end" id="email" placeholder="Your Email" aria-label="Your Email">
                        <button class="btn btn-secondary text-white btn-lg rounded-pill rounded-start px-lg-4" type="submit">Subsribe</button>
                    </div>
                    <p class="text-center light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Contact -->


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
    <!-- Templatemo -->
    <script src="{{ asset('page_assets/js/templatemo.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('page_assets/js/custom.js') }}"></script>

</body>

</html>