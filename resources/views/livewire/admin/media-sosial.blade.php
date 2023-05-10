<div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Media Sosial</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">WhatsApp Layanan 1 :</label>
                            <input wire:model="wa1" type="text" class="form-control" id="basicInput"  @if (!$edit == true) disabled @endif>
                        </div>

                        <div class="form-group">
                            <label for="helpInputTop">WhatsApp Layanan 2 :</label> 
                            <input wire:model="wa2" type="text" class="form-control" id="helpInputTop"  @if (!$edit == true) disabled @endif>
                        </div>

                        <div class="form-group">
                            <label for="helperText">Url Twitter :</label>
                            <input wire:model="twitter" type="text" id="helperText" class="form-control"  @if (!$edit == true) disabled @endif>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledInput">Url Facebook :</label>
                            <input wire:model="facebook" type="text" class="form-control" id="disabledInput" @if (!$edit == true) disabled @endif>
                        </div>
                        <div class="form-group">
                            <label for="disabledInput">Url Instagram</label>
                            <input wire:model="instagram" type="text" class="form-control" id="readonlyInput" @if (!$edit == true) disabled @endif>
                        </div>

                        <div class="form-group">
                            <label for="disabledInput1">Url Linkedin</label>
                            <input wire:model="linkedin" type="text" class="form-control" id="readonlyInput1"  @if (!$edit == true) disabled @endif>
                        </div>

                       
                    </div>
                    
                    <div class="col-md-6">
                        @if ($edit == true)
                        <button class="btn btn-success badge" type="button" wire:click="UpdateMediaSosial">Save</button>
                        <button class="btn btn-danger badge" type="button" wire:click="cancel">Cancel</button>
                            
                        @else
                            
                        <button class="btn btn-primary badge" type="button" wire:click="edit">Edit</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
