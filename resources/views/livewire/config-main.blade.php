<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Img OUR SERVICE</h5>
                    </div>
                    @if ($imgService)
                        <img src="{{ $imgService->temporaryUrl() }}" class="card-img-top" alt="">
                    @else
                        <img src="{{ asset('storage/imgService.png') }}" class="card-img-top p-4" alt="" id="imgService">
                        <script>
                            window.livewire.on('imgServiceUpdated', () => {
                                let img = document.getElementById('imgService');
                                let tgl = new Date();
                                img.src = "/storage/imgService.png?" + tgl.getTime();
                            });
                        </script>
                    @endif
    
                    <div class="card-body mt-3">
                        <form wire:submit.prevent="UpdateimgService">
                            <input type="file" name="imgService" wire:model="imgService"
                                class=" @error('imgService') is-invalid @enderror">
                            @error('imgService')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            @if ($imgService)
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-danger" wire:click="close">Cancel</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Logo</h5>
                    </div>
                    @if ($logo)
                        <img src="{{ $logo->temporaryUrl() }}" class="card-img-top" alt="">
                    @else
                        <img src="{{ asset('storage/logo.png') }}" class="card-img-top p-2" alt="" id="logo">
                        <script>
                            window.livewire.on('logoUpdated', () => {
                                let img = document.getElementById('logo');
                                let tgl = new Date();
                                img.src = "/storage/logo.png?" + tgl.getTime();
                            });
                        </script>
                    @endif
    
                    <div class="card-body mt-3">
                        <form wire:submit.prevent="UpdateLogo">
                            <input type="file" name="logo" wire:model="logo"
                                class=" @error('logo') is-invalid @enderror">
                            @error('logo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            @if ($logo)
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-danger" wire:click="close">Cancel</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>About Our</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <textarea wire:model="iAbout" class="form-control" @if ($about == true)
                                @else disabled
                            @endif></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if ($this->about == true)
                            <button class="btn btn-secondary badge" wire:click="close">Close</button>
                            <button class="btn btn-success badge" wire:click="UpdateAbout">Save</button>
                        @else
                            <button class="btn btn-primary badge" wire:click="About">Edit</button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Img About Our</h5>
                    </div>
                    @if ($imgAbout)
                        <img src="{{ $imgAbout->temporaryUrl() }}" class="card-img-top p-4" alt="">
                    @else
                        <img src="{{ asset('storage/imgAbout.png') }}" class="card-img-top p-4" alt="" id="imgAbout">
                        <script>
                            window.livewire.on('imgAboutUpdated', () => {
                                let img = document.getElementById('imgAbout');
                                let tgl = new Date();
                                img.src = "/storage/imgAbout.png?" + tgl.getTime();
                            });
                        </script>
                    @endif
    
                    <div class="card-body mt-3">
                        <form wire:submit.prevent="UpdateimgAbout">
                            <input type="file" name="imgAbout" wire:model="imgAbout"
                                class=" @error('imgAbout') is-invalid @enderror">
                            @error('imgAbout')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            @if ($imgAbout)
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-danger" wire:click="close">Cancel</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>What we do?</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <textarea wire:model="doo" class="form-control" @if ($do == true)
                                @else disabled
                            @endif></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if ($this->do == true)
                            <button class="btn btn-secondary badge" wire:click="close">Close</button>
                            <button class="btn btn-success badge" wire:click="UpdateDo">Save</button>
                        @else
                            <button class="btn btn-primary badge" wire:click="do">Edit</button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Img What we do?</h5>
                    </div>
                    @if ($imgDoo)
                        <img src="{{ $imgDoo->temporaryUrl() }}" class="card-img-top p-4" alt="">
                    @else
                        <img src="{{ asset('storage/imgDoo.png') }}" class="card-img-top p-4" alt="" id="imgDoo">
                        <script>
                            window.livewire.on('imgDooUpdated', () => {
                                let img = document.getElementById('imgDoo');
                                let tgl = new Date();
                                img.src = "/storage/imgDoo.png?" + tgl.getTime();
                            });
                        </script>
                    @endif
    
                    <div class="card-body mt-3">
                        <form wire:submit.prevent="UpdateI  mgDoo">
                            <input type="file" name="imgDoo" wire:model="imgDoo"
                                class=" @error('imgDoo') is-invalid @enderror">
                            @error('imgDoo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            @if ($imgDoo)
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-danger" wire:click="close">Cancel</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>&copy; Copyright</h5>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <textarea wire:model="copyright" class="form-control" @if ($Bcopyright == true)
                        @else disabled
                    @endif></textarea>
                </div>
            </div>
            <div class="card-footer">
                @if ($this->Bcopyright == true)
                    <button class="btn btn-secondary badge" wire:click="close">Close</button>
                    <button class="btn btn-success badge" wire:click="UpdateCopyright">Save</button>
                @else
                    <button class="btn btn-primary badge" wire:click="copyright">Edit</button>
                @endif
            </div>
        </div>

    </div>
</div>
