<div class="mb-5" id="a">
    <form enctype="multipart/form-data" wire:submit.prevent="Update({{ $idid }})">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Judul</span>
            <input type="text" class="form-control  @error('judul') is-invalid @enderror" placeholder=""
                aria-label="Username" aria-describedby="basic-addon1" wire:model="judul" name="judul">
        </div>

        <div class="input-group mb-3" style="z-index: 100">
            <div wire:ignore class="container">

                <div class="col-md-12">
                    <textarea wire:model="isi" class="form-control" name="isi" rows="10" id="isi"></textarea>
                </div>
            </div>

            
        </div>
        <label for="">Gambar :</label> <br>
        @if ($gambar)
            <img src="{{ $gambar->temporaryUrl() }}" class="w-25" alt="">
        @else
            <img src="{{ asset('storage/' . $gambarLama) }}" class="w-25" alt="">
        @endif
        <div class="input-group mb-3">
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                wire:model="gambar">
        </div>

        @error('isi')
            <script>
                alert('Konten Kosong')
            </script>
        @enderror

        <button class="btn btn-warning">Save</button>
        <button type="button" wire:click="close" class="btn btn-secondary">Close</button>

    </form>
</div>
