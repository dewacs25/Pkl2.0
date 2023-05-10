@if (session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show mt-3 mb-3 animate__animated animate__bounceInRight" role="alert">
        {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3 mb-3 animate__animated animate__bounceInRight" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show mt-3 mb-3 animate__animated animate__bounceInRight" role="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
