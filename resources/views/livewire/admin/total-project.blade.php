<div>
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h6>Website : &nbsp;</h6>
                    <input wire:model="iWeb" type="number" class="w-50 form-control" style="height: 25px;" name="" id="" @if (!$web == true)
                        disabled
                    @endif>
                </div>
                <div class="card-body">
                    @if ($web == true)
                    <button class="btn btn-success badge" wire:click="UpdateWeb">Save</button>
                    <button class="btn btn-danger badge" wire:click="cancel">Cancel</button>
                        
                    @else
                        
                    <button class="btn btn-primary badge" wire:click="Web">Edit</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h6>Apk Werbase : &nbsp;</h6>
                    <input wire:model="iWerbase" type="number" class="form-control" style="width: 65px; height: 25px;" name="" id="" @if (!$werbase == true)
                        disabled
                    @endif>
                </div>
                <div class="card-body">
                    @if ($werbase == true)
                    <button class="btn btn-success badge" wire:click="UpdateWerbase">Save</button>
                    <button class="btn btn-danger badge" wire:click="cancel">Cancel</button>
                        
                    @else
                        
                    <button class="btn btn-primary badge" wire:click="Werbase">Edit</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h6>Mobile Apps : &nbsp;</h6>
                    <input wire:model="iApp" type="number" class="form-control" style="height: 25px; width: 70px" name="" id="" @if (!$app == true)
                        disabled
                    @endif>
                </div>
                <div class="card-body">
                    @if ($app == true)
                    <button class="btn btn-success badge" wire:click="UpdateApp">Save</button>
                    <button class="btn btn-danger badge" wire:click="cancel">Cancel</button>
                        
                    @else
                        
                    <button class="btn btn-primary badge" wire:click="App">Edit</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h6>SEO : &nbsp;</h6>
                    <input wire:model="iSeo" type="number" class="w-50 form-control" style="height: 25px;" name="" id="" @if (!$seo == true)
                        disabled
                    @endif>
                </div>
                <div class="card-body">
                    @if ($seo == true)
                    <button class="btn btn-success badge" wire:click="UpdateSeo">Save</button>
                    <button class="btn btn-danger badge" wire:click="cancel">Cancel</button>
                        
                    @else
                        
                    <button class="btn btn-primary badge" wire:click="Seo">Edit</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
