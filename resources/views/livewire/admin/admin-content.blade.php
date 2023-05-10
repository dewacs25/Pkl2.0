<div>
    <?php
    
    if (count($layanans) < 1) {
        echo "<script>alert('data layanan kosong ! silahkan mengisi data layanan terlebih dahulu');document.location='/admin/layanan';</script>";
    }
    ?>
    <div class="container-fluid">

        @if ($add == true)
            @include('livewire/admin/addKonten')
        @elseif($edit == true)
            @include('livewire/admin/editKonten')
        @else
            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <input wire:model="cari" type="text" placeholder="Search..." class="form-control">
                    </div>

                    <div class="col-lg-6 col-12">
                        <button wire:click="add" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </div>
            </div>
        @endif

        @include('livewire/admin/flash')
        <table class="table animate__animated animate__fadeInLeft">
            <thead class="w-auto">
                <tr>
                    <th scope="col">#</th>
                    <th>Judul</th>
                    <th>Layanan</th>
                    <th>Gambar
                    <th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contents as $key => $content)
                    <tr>
                        <th scope="row">{{ ($contents->currentPage() - 1) * $contents->perPage() + $key + 1 }}</th>
                        <td>{{ $content->judul }}</td>
                        <td>{{ $content->layanan->nama_layanan }}</td>
                        <td><img src="{{ asset('storage/' . $content->gambar) }}" style="width: 50px" alt="">
                        </td>
                        <td>
                            {{-- <button wire:click="delete({{ $content->id_isiLayanan }})"
                                class="btn btn-danger badge">Delete</button> --}}

                            <a href="#" class="btn btn-danger badge" onclick="confirmAction('{{ $content->id_isiLayanan }}')">Delete</a>
                            <script>
                                function confirmAction(parameter) {
                                    if (confirm('Are you sure you want to proceed?')) {
                                        @this.call('delete', parameter)
                                    }
                                }
                                
                            </script>


                            {{-- <button type="button" class="btn btn-danger badge" data-bs-toggle="modal"
                                data-bs-target="#danger{{ $content->id_isiLayanan }}">
                                Delete
                            </button>

                            <div class="modal fade text-left" id="danger{{ $content->id_isiLayanan }}" tabindex="-1"
                                role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
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
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" wire:click="delete({{ $content->id_isiLayanan }})"
                                                class="btn btn-danger ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Iya</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!--Danger theme Modal -->

                            <button wire:click="edit({{ $content->id_isiLayanan }})"
                                class="btn btn-warning badge">Edit</button>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $contents->links() }}

        @if (count($contents) < 1)
            <img src="{{ asset('logoumkn/datakosong.png') }}" class="w-25" alt="">
        @endif
    </div>

</div>
