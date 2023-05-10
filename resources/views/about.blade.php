@extends('layouts/app')
@section('content')

<section id="hero" class="hero d-flex align-items-center">
    <div class="container-fluid bannerabout ">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class=" animate__animated animate__fadeInUp" style="color: #ffe27a; font-size:70px;">About</h1>
            <a type="button" style="font-size: 15px;"
                class=" animate__animated animate__fadeInUp text-white text-center ms-lg-5"><i
                    class="fa-solid fa-house text-white"></i>&nbsp;Home&nbsp;<strong
                    style="color: #ffe27a;">>&nbsp;About</strong></a>
        </div>

    </div>

</section><!-- End Hero -->

<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h1 class="fw-bold text-center text-lg-start">
                        About Our
                    </h1>

                    <p class="fs-6" style="color: #777777;">
                        {{ $aboutOur }}
                    </p>

                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('storage/imgAbout.png') }}" class="img-fluid" alt="" />
            </div>

        </div>
    </div>
</section>

<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
        <header class="section-header">

            <p class="fw-bold" style="color: #1f5abc; font-family:sans-serif;">Testimonials</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">

                        <p>
                            Pro Teknologi OK bgt, Timnya memberikan membantu saya merancang website. Pelayanan yang
                            prima dan ramah, ditambah banyak sekali ilmu tentang perkembangan teknologi yang dishare
                            kepada saya. saya rekomendasikan jasa pembuatan website terbaik nich...thx
                        </p>
                        <div class="profile mt-auto">
                            {{-- <img
                          src="{{ asset('flex/assets/img/testimonials/testimonials-1.jpg') }}"
                          class="testimonial-img"
                          alt=""
                      /> --}}

                            <h4>Reganis</h4>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">

                        <p>
                            Saya sangat mengapresiasi Kinerja Pro Teknologi, Pembuatan Cepat hanya 14 hari kerja,
                            ditambah dibantu di inputakan data oleh tim Protech tanpa harus di minta, sudah gitu murah,
                            cepat dan profesional. thanks
                        </p>
                        <div class="profile mt-auto">
                            {{-- <img
                          src="{{ asset('flex/assets/img/testimonials/testimonials-2.jpg') }}"
                          class="testimonial-img"
                          alt=""
                      /> --}}

                            <h4>PT. Vin Utama Mandiri</h4>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">

                        <p>
                            Alhamdulillah, website Alihsan.co.id dapat publish untuk keperluan promosi. ini sangat
                            membantu sekalai menghemat budget marketing. dan kini dengan adanya web saya sangat terbatu
                            sekali
                        </p>
                        <div class="profile mt-auto">
                            {{-- <img
                          src="{{ asset('flex/assets/img/testimonials/testimonials-3.jpg') }}"
                          class="testimonial-img"
                          alt=""
                      /> --}}

                            <h4>Alisan</h4>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">

                        <p>
                            Saya sangat puas akan kinerja dan progress Pro Teknologi Sudah 2 kali saya memilih Wan
                            Solution untuk jasa pembuatan website cibalunghappylanda dan Resto. saya Bangga dan Puas
                            terhadap layanan Pro Teknologi. Terimakasih
                        </p>
                        <div class="profile mt-auto">


                            <h4>Cibalung Happyland</h4>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">

                        <p>
                            Dulu saya berpikir Jasa AC tidak bisa di Promsikan via online. Namun berkat penjelasan dari
                            tim Protech, saya mengerti teknologi saat ini sangat membantu dalam proses bisnis, terlebih
                            website saya bisa tampil di halaman 1 google hanya dengan mengetikan "service ac bekasi"
                            berkas Jasa SEO. terimakasih protech
                        </p>
                        <div class="profile mt-auto">


                            <h4>Aulinno teknik</h4>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
    
@endsection