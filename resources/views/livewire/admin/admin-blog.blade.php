<div>
    @if ($add == true)
        <h3 class="mb-3">Add Blog</h3>
        @include('livewire/admin/addBlog')
    @elseif($edit == true)
    @include('livewire/admin.editBlog')
    @else
        <div class="mb-5">
            <h3 class="mb-3">Blog</h3>

            <div class="row">

                <div class="col-lg-4 col-6">
                    <input type="text" wire:model="cari" placeholder="Search..." class="form-control" name="" id="">
                </div>
                <div class="col-2 float-end">

                    <button class="btn btn-primary btn-sm " wire:click="add">Add</button>
                </div>
            </div>
        </div>
    @endif

    @include('livewire/admin/flash')

    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-content">
                        <img src="{{ asset('storage/' . $blog->gambar) }}" class="card-img-top img-fluid"
                            alt="singleminded">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->judul }}</h5>
                            <p class="card-text">
                                {!! Str::substr($blog->isi, 0, 150) !!}
                            </p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end me-3 pb-3">
                        <button type="button" class="btn btn-danger badge" data-bs-toggle="modal"
                            data-bs-target="#danger{{ $blog->id }}">
                            Delete
                        </button>

                        <!--Danger theme Modal -->
                        <div class="modal fade text-left" id="danger{{ $blog->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel120" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title white" id="myModalLabel120">Danger
                                        </h5>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Yakin Ingin Menghapus
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        <button type="button" wire:click="deleteBlog({{ $blog->id }})"
                                            class="btn btn-danger ml-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Iya</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#a" class="btn btn-warning" wire:click="edit({{ $blog->id }})" >Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
        @if (count($blogs) < 1)
        <img src="{{ asset('logoumkn/datakosong.png') }}" class="w-25" alt="">
            
        @else
            @if ($totalBlog != count($blogs))
                @if (!$cari)
                <button class="btn btn-info" wire:click="showMore">Show More</button>
                @endif
            @endif
        @endif



    </div>
</div>
