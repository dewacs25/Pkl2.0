@extends('layouts/app')
@section('content')
<section id="hero" class="hero d-flex align-items-center">
    <div class="container-fluid bannerabout ">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class=" animate__animated animate__fadeInUp text-center ms-lg-4"
                style="color: #ffe27a; font-size:70px;">Contact Us</h1>
            <div style="justify-content: center; display:flex;">
                <a type="button" style="font-size: 15px;"
                    class=" animate__animated animate__fadeInUp text-white text-center ms-lg-5"><i
                        class="fa-solid fa-house text-white"></i>&nbsp;Home&nbsp;<strong
                        style="color: #ffe27a;">>&nbsp;Contact Us</strong></a>
            </div>
        </div>

    </div>

</section>

<section id="features" class="features">
    <div class="container" data-aos="fade-up">

        <div class="row feature-icons" data-aos="fade-up">
            <div class="row">


                <div class="col-xl-5 col-12 d-flex content p-4 rounded-4" style="background-color:#1f5abc;">
                    <div class="row align-self-center gy-4">
                        <h1 class="text-white fw-bold">Contact Us</h1>
                        <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="300">

                            <i class="text-white fa-solid fa-map"></i>
                            <div>
                                <h4 class="text-white">Alamat :</h4>
                                <p class="text-white">
                                    {{ $alamat }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class=" text-white fa-solid fa-envelope"></i>
                            <div>
                                <h4 class="text-white">Email :</h4>
                                <p class="text-white">
                                    {{ $email }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="500">
                            <i class="text-white fa-solid fa-phone"></i>
                            <div>
                                <h4 class="text-white">WhatsApp : </h4>
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
@endsection