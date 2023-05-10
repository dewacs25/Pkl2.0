@extends('layouts/app')
@section('content')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container-fluid bannerabout"
            >
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="animate__animated animate__fadeInUp text-center" style="color: #ffe27a; font-size:57px; ">
                    {{ $isi->judul }}</h1>
                    <div style="display: flex; justify-content:center;">
                        <a type="button" class="animate__animated animate__fadeInUp text-white text-center "><i
                                class="fa-solid fa-house text-white"></i>&nbsp;Home&nbsp;>&nbsp;Blog&nbsp;
                            <strong style="color: #ffe27a;">>&nbsp;{{ $isi->judul }}</strong>
                        </a>
                    </div>
            </div>

        </div>

    </section><!-- End Hero -->
    <!-- ======= Header ======= -->

    <main id="main">



        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ asset('storage/'.$isi->gambar) }}" alt="" class="img-fluid w-100">
                            </div>
                            <h4 class="fw-bold " style="color: #292929;">
                                {{ $isi->judul }}
                            </h4>




                            <div class="entry-content">
                                <p>{!! $isi->isi !!}</p>

                            </div>



                        </article><!-- End blog entry -->



                        <!-- End blog comments -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">



                            <h3 style="color: #292929" class="sidebar-title fw-bold fs-3">Project <strong
                                    style="color: #EF5861;">Terbaru</strong> </h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="{{ asset('logoumkn/buton.JPG') }}" alt="">
                                    <h4><a class="text-dark" href="">Website Properti</a></h4>

                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('logoumkn/buton.JPG') }}" alt="">
                                    <h4><a class="text-dark" href="">Aplikasi android dan ios sayur online</a></h4>

                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('logoumkn/buton.JPG') }}" alt="">
                                    <h4><a class="text-dark" href="">Aplikasi Mobile Apps Android Beli Mobil</a></h4>

                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('logoumkn/buton.JPG') }}" alt="">
                                    <h4><a class="text-dark" href="">Aplikasi, Website Lainnya</a></h4>

                                </div>

                                

                            </div><!-- End sidebar recent posts-->



                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main>
@endsection
