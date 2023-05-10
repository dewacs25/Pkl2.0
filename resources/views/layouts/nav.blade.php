<header id="header" class="header fixed-top text-white" style="background-color: #1f5abc;">

    <div class="container-fluid container-xl d-flex align-items-center mb-4 justify-content-between">

        <a href="/index/admin" class=" d-flex align-items-center">
            <img src="{{ asset('storage/logo.png') }}" alt="" width="180">

        </a>

        <nav id="navbar" class="navbar ">

            <ul>
                <li><a class="nav-link scrollto active fs-5 text-white " href="/"><button
                            class="btn btn-danger rounded-pill fw-bold">Home</button></a></li>
                <li><a class="nav-link scrollto fs-6 text-white" href="/about">About</a></li>
                {{-- <li><a class="nav-link scrollto fs-6 text-white" href="/res">Reservation</a></li> --}}
                @foreach ($layanans as $layanan)
                <li class="dropdown">
                    <a href=""><span class="text-white">{{ $layanan->nama_layanan }}</span>
                        <i class="bi bi-chevron-down text-white"></i></a>
                    <ul>
                        @foreach ($contents as $content)
                            @if ($layanan->id_layanan == $content->id_layanan)
                                <li><a 
                                        href="/detail/{{ $content->id_isiLayanan }}/{{ str_replace(' ','-',$content->judul) }}">{{ $content->judul }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                </li>
            @endforeach
                <li><a class="nav-link scrollto fs-6 text-white" href="/blog">Blog</a></li>
                <li><a class="nav-link scrollto fs-6 text-white" href="/contact2">Contact</a></li>
                {{-- <li><a class="nav-link scrollto fs-6 text-dark" href="/blog">Blog &nbsp;</a></li>
      <li><a class="nav-link scrollto fs-6 text-dark" href="/kontak">Contact &nbsp;</a></li> --}}
                </li>


                {{-- <button style="background-color: #5577B4;"class="btn btn-primary rounded-pill text-md-center d-none d-lg-block" href="#about"><i class="fa-brands fa-instagram"></i></button>&nbsp;
      <button style="background-color: #5577B4;"class="btn btn-primary rounded-pill text-md-center d-none d-lg-block" href="#about"><i class="fa-brands fa-youtube"></i></button>&nbsp; --}}
            </ul>

            <i class="bi bi-list mobile-nav-toggle text-white "></i>

        </nav><!-- .navbar -->
    </div>
</header>
