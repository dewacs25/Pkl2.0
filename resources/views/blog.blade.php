@extends('layouts/app')
@section('content')

<section id="hero" class="hero d-flex align-items-center">
    <div class="container-fluid bannerabout ">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class=" animate__animated animate__fadeInUp text-center ms-lg-4"
                style="color: #ffe27a; font-size:70px;">Blog</h1>
            <div style="justify-content: center; display:flex;">
                <a type="button" style="font-size: 15px;"
                    class=" animate__animated animate__fadeInUp text-white text-center ms-lg-5"><i
                        class="fa-solid fa-house text-white"></i>&nbsp;Home&nbsp;<strong
                        style="color: #ffe27a;">>&nbsp;Blog</strong></a>
            </div>
        </div>

    </div>

</section><!-- End Hero -->

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
                            <img src="{{ asset('storage/'.$item->gambar) }}" class="img-fluid" alt="" />
                        </div>
                        <p class="">
                            {{ $item->judul }}
                        </p>
                        <div class="mt-2">
                            <a href="/blog/{{ $item->id }}/{{ str_replace(' ','-',$item->judul) }}">
                                <button type="button" class="btn btn-outline-secondary">View Details</button>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
                
        </div>
        <div class="mt-4">
            {{ $blogs->links() }}
        </div>
    </div>

    </div>

</section>
@endsection