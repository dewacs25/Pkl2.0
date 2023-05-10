<div>
    <div class="row">

        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Alamat :</h5>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <textarea wire:model="alamat" class="form-control" @if ($Balamat == true)
                            @else disabled
                        @endif></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    @if ($Balamat == true)
                        <button class="btn btn-secondary badge" wire:click="close">Close</button>
                        <button class="btn btn-success badge" wire:click="UpdateAlamat">Save</button>
                    @else
                        <button class="btn btn-primary badge" wire:click="BAlamat">Edit</button>
                    @endif
                </div>
                
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Email :</h5>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <textarea wire:model="email" class="form-control" @if ($Bemail == true)
                            @else disabled
                        @endif></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    @if ($Bemail == true)
                        <button class="btn btn-secondary badge" wire:click="close">Close</button>
                        <button class="btn btn-success badge" wire:click="UpdateEmail">Save</button>
                    @else
                        <button class="btn btn-primary badge" wire:click="BEmail">Edit</button>
                    @endif
                </div>
                
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h5>WhatsApp :</h5>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <textarea wire:model="whatsapp" class="form-control" @if ($Bwhatsapp == true)
                            @else disabled
                        @endif></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    @if ($Bwhatsapp == true)
                        <button class="btn btn-secondary badge" wire:click="close">Close</button>
                        <button class="btn btn-success badge" wire:click="UpdateWhatsapp">Save</button>
                    @else
                        <button class="btn btn-primary badge" wire:click="BWhatsapp">Edit</button>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
