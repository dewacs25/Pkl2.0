<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Proteknologi</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('bgstyle/stylebg.css') }}">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendor CSS Files -->
    <link href="{{ asset('flex/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('flex/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('flex/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('flex/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('flex/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('flex/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('flex/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    {{-- @include('partials1.nav') --}}

    <!-- ======= Hero Section ======= -->
    @include('layouts/nav')
    @yield('content')

    <footer id="footer" class="footer text-white">

        <div class="footer-top  text-white">
            <div class="container">
                <div class="row gy-4 text-white">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="{{ asset('logoumkn/protek2.png') }}" alt="" />

                        </a>
                        <p>
                            {{ $alamat  }}
                        </p>
                        <li style="list-style:none;">
                            <i class="fa-solid fa-phone"></i>
                            <a class="text-white" href="#"> {{ $whatsapp }}</a>
                        </li>
                        <li style="list-style:none;">
                            <i class="fa-solid fa-envelope"></i>
                            <a class="text-white" href="#"> {{ $email }}</a>
                        </li>
                        <li style="list-style:none;">
                            <i class="fa-solid fa-earth-americas"></i>
                            <a class="text-white" href="#">www.proteknologi.com</a>
                        </li>
                        <div class="social-links mt-3">
                            <a href="{{ $twitter }}" class="twitter"><i class="bi text-white bi-twitter"></i></a>
                            <a href="{{ $facebook }}" class="facebook"><i class="bi text-white bi-facebook"></i></a>
                            <a href="{{ $instagram }}" class="instagram"><i class="bi text-white bi-instagram"></i></a>
                            <a href="{{ $linkedin }}" class="linkedin"><i class="bi text-white bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4 class="text-white">Profile</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a class="text-white" href="/lihatprofile">Sekapur Sirih</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a class="text-white" href="/lihatprofile">Visi dan Misi Perusahaan</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a class="text-white" href="/lihatprofile">Tata Nilai Perusahaan</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a class="text-white" href="/lihatprofile">Strategi Perusahaan</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4 class="text-white">Online Support</h4>
                        <ul>
                            <li>
                                <i class="fa-brands  fs-1 fa-whatsapp"></i>
                                <a class="text-white" target="_blank" href="https://wa.me/62{{ Str::substr($wa1, 1, 11) }}"> &nbsp;{{ $wa1 }}
                                </a>
                            </li>
                            <br>
                            <li>
                                <i class="fa-brands  fs-1 fa-whatsapp"></i>
                                <a class="text-white" target="_blank" href="https://wa.me/62{{ Str::substr($wa2, 1, 11) }}"> &nbsp;{{ $wa2 }}</a>
                            </li>
                            <br>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4 class="text-white">Opening Hours</h4>
                        <table class="table text-white">

                            <tbody>
                                <tr>

                                    <td>Mon - Tues :</td>
                                    <td>6.00 am - 10.00 pm</td>

                                </tr>
                                <tr>

                                    <td>Wednes - Thurs :</td>
                                    <td>8.00 am - 6.00 pm</td>

                                </tr>
                                <tr>

                                    <td>Fri :</td>
                                    <td>3.00 pm - 8.00 pm</td>

                                </tr>
                                <tr>

                                    <td>Sun :</td>
                                    <td><button type="button" class="btn btn-danger">Closed</button></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  ">
            <div class="copyright text-white">
               {{ $copyright }}
            </div>

        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center "
        style="background-color: dimgray"><i class="fa-solid fa-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('flex/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('flex/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('flex/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('flex/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('flex/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('flex/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('flex/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('flex/assets/js/main.js') }}"></script>

</body>

</html>
