@extends('layouts/app')
@section('content')
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container-fluid "
            style="
        height: 70vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('storage/imgService.png') }}');
    background-size: cover;
    background-position: center;
        ">
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class=" animate__animated animate__fadeInDown text-center text-white">Jasa Pembuatan Aplikasi Terpercaya</h1>
                <a type="button" style="font-size: 15px;"
                    class=" animate__animated animate__fadeInDown text-white text-center ms-lg-5">Kami siap melayani jasa
                    pembuatan website dan aplikasi Android/Ios</a>
            </div>

        </div>

    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h1 class="fw-bold text-center text-lg-start">
                            About Us
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

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('storage/imgDoo.png') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h1 class="fw-bold text-center text-lg-start" style="color: #1f5abc;">
                                What we do?
                            </h1>
                            <p class="fs-5">
                                {{ $doo }}
                            </p>
                            <div class="text-center text-lg-start">
                                <a style="background-color: #ffe27a; color:#9d5f36;" href="/about"
                                    class="btn-read-more mb-3 d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span class="fw-bold">Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="/kontak2"
                                    class="btn btn-outline-secondary btn-lg fw-bold d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Contact Us</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 col-lg-6 d-none d-sm-block">
                        <h4><i class="fa-solid fa-circle-question"></i>&nbsp;KENAPA MEMILIH KAMI <i
                                class="text-danger">PROTECH</i></h4>
                    </div>
                    <div class="col-12 col-lg-6 d-none d-sm-block">
                        <h4><i class="fa-solid fa-users"></i>&nbsp;Client</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box   d-flex align-items-center">
                                    <i class="bi bi-check bg-danger text-white"></i>
                                    <h3>Legalitas</h3>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box   d-flex align-items-center">
                                    <i class="bi bi-check bg-danger text-white"></i>
                                    <h3>Focus</h3>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box   d-flex align-items-center">
                                    <i class="bi bi-check bg-danger text-white"></i>
                                    <h3>Excellence</h3>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box   d-flex align-items-center">
                                    <i class="bi bi-check bg-danger text-white"></i>
                                    <h3>Integritas</h3>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box   d-flex align-items-center">
                                    <i class="bi bi-check bg-danger text-white"></i>
                                    <h3>Garansi</h3>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box   d-flex align-items-center">
                                    <i class="bi bi-check bg-danger text-white"></i>
                                    <h3>Suport</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('logoumkn/client.JPG') }}" class="img-fluid" alt="" />
                    </div>
                </div>
                <!-- / row -->
                <section id="recent-blog-posts" class="recent-blog-posts">
                    <div class="container" data-aos="fade-up">
                        <header class="section-header">
                            <div style="font-family: Nunito;">
                                <h1 class="fw-bold" style="color: #1f5abc;">BLOG TERBARU</h1>
                            </div>
                        </header>
                        <div class="row">
                            @foreach ($blogs as $item)
                                <div class="col-lg-4">
                                    <div class="post-box">
                                        <div class="post-img">
                                            <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid"
                                                alt="" />
                                        </div>
                                        <p class="">
                                            {{ $item->judul }}
                                        </p>
                                        <div class="mt-2">
                                            <a href="/blog/{{ $item->id }}/{{ str_replace(' ','-',$item->judul) }}">
                                                <button type="button" class="btn btn-outline-secondary">View
                                                    Details</button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div style="font-family: Nunito; mt-3">
                        <h1 class="fw-bold text-center"><a style="background-color:#1f5abc;"
                                class="btn btn-lg mt-4 fw-bold btn-primary" href="/blog" role="button">VIEW ALL</a>
                        </h1>
                    </div>
                </section>

                <section id="counts" class="counts ">

                    <div class="container" data-aos="fade-up">
                        <div class="row gy-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-laptop"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="{{ $web }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>WEBSITE</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext" style="color: #ee6c20"></i>
                                    <div>

                                        <span data-purecounter-start="0" data-purecounter-end="{{ $werbase }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>APLIKASI WERBASE</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-phone-fill" style="color: #15be56"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="{{ $app }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>MOBILE APPS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-people" style="color: #bb0852"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="{{ $seo }}"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>SEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </section>


        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
    
                <div class="row feature-icons" data-aos="fade-up">
                    <div class="row">
    
    
                        <div class="col-xl-5 col-12 d-flex content  rounded-4" style="background-color:#1f5abc;">
                            <div class="row align-self-center gy-4">
                                <h1 class="text-white fw-bold">Contact Us</h1>
                                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="300">
    
                                    <i class="text-white fa-solid fa-map"></i>
                                    <div>
                                        <h4 class="text-white">Alamat</h4>
                                        <p class="text-white">
                                            {{ $alamat }}
                                        </p>
                                    </div>
                                </div>
    
                                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class=" text-white fa-solid fa-envelope"></i>
                                    <div>
                                        <h4 class="text-white">Email </h4>
                                        <p class="text-white">
                                            {{ $email }}
                                        </p>
                                    </div>
                                </div>
    
                                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="text-white fa-solid fa-phone"></i>
                                    <div>
                                        <h4 class="text-white">WhatsApp: </h4>
                                        <p class="text-white">
                                            {{ $whatsapp }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-12 text-center" data-aos="fade-right" data-aos-delay="100">
                            
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.554320660512!2d106.7766442734733!3d-6.577790364298146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c53991e19627%3A0x6a1afcab769f29f8!2sGraha%20nurul%20menteng!5e0!3m2!1sid!2sid!4v1669799244259!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
