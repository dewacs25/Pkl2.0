<div>

   
        
 
    

    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Layanan</h4>
                    </div>

                    @include('livewire/admin/flash')
                    
                    <div class="card-content">
                        <div class="card-body">


                            @if ($add == true)
                                <button class="btn btn-secondary btn-sm mb-3" wire:click="close">Close</button>

                                <div class="mb-3">
                                    <form wire:submit.prevent="Tambah" class="form-grub">
                                        <input type="text"
                                            class="form-control animate__animated animate__flipInX @error('layanan') is-invalid @enderror"
                                            wire:model="layanan" name="layanan" placeholder="Masukan Nama Layanan">
                                        <button type="submit" class="btn btn-sm btn-primary mt-3">Add</button>
                                    </form>
                                </div>
                            @else
                                <button class="btn btn-primary btn-sm mb-3" wire:click="add">Add</button>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nama Layanan</th>
                                            <th>Created at</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($layanans as $layanan)
                                       
                                            <tr>
                                                @if ($edit == true && $idid == $layanan->id_layanan)
                                                    <td class="text-bold-500"><input type="text" class="form-control animate__animated animate__flipInX" wire:model="layanan"></td>
                                                @else
                                                <td class="text-bold-500">{{ $layanan->nama_layanan }}</td>
                                                @endif
                                                <td>{{ $layanan->created_at->format('D M Y') }}</td>

                                                <td>
                                                    @if ($edit == true && $idid == $layanan->id_layanan)
                                                    <button type="button" wire:click="close" class="btn btn-secondary badge">Close</button>
                                                    <button type="button" wire:click="update({{ $idid }})" class="btn btn-warning badge">Save</button>

                                                    @else
                                                    <a href="#"
                                                        onclick="confirmAction('{{ $layanan->id_layanan }}')"><i
                                                            class="bi bi-trash3 text-danger fs-5"></i></a>
                                                    <script>
                                                        function confirmAction(parameter) {
                                                            if (confirm('Are you sure you want to proceed?')) {
                                                                @this.call('delete', parameter)
                                                            }
                                                        }
                                                    </script>
                                                    <a href="#" wire:click="edit({{ $layanan->id_layanan }})"><i
                                                            class="bi bi-pencil-square text-warning fs-5 ms-2"></i></a>
                                                    @endif
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                            
                                    </tbody>
                                  
                                    
                                </table>
                                {{ $layanans->links() }}
                                @if (count($layanans) < 1)
                                <img src="{{ asset('logoumkn/datakosong.png') }}" class="w-25 mt-5" alt="">
                                @endif

                            </div>
                        </div>
                        <!-- table striped -->

                    </div>
                </div>
            </div>
        </div>
    </section>

   

</div>
