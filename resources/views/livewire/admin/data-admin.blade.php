<div>
    <div class="mb-2">
        <h3 class="">Admin</h3>
    </div>
    <div class="d-flex justify-content-end mb-3">
        @if ($add == true || $edit == true)
            <button class="btn btn-danger" wire:click="close">
                <i class="bi bi-x"></i>
            </button>
        @else
            <button class="btn btn-primary" wire:click="add">
                <i class="bi bi-person-plus-fill"></i>
            </button>
        @endif
    </div>

    @include('livewire/admin/flash')

    @if ($add == true)
        <div class="mb-3 card">
            <div class="card-body">
                <form wire:submit.prevent="addAdmin">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                            placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                        @error('name')
                            <span class="input-group-text text-small text-danger"
                                id="basic-addon1">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            wire:model="email" autocomplete='off' placeholder="Email" aria-label="Email"
                            aria-describedby="basic-addon1">
                        @error('email')
                            <span class="input-group-text text-small text-danger"
                                id="basic-addon1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                        <input type="password" wire:model="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            aria-label="Password" aria-describedby="basic-addon1">
                        @error('password')
                            <span class="input-group-text text-small text-danger"
                                id="basic-addon1">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm mt-3 float-end">Add</button>
                </form>

            </div>
        </div>
    @elseif($edit == true)
        <div class="mb-3 card">
            <div class="card-body">
                <form wire:submit.prevent="editAdmin">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                            placeholder="name" aria-label="name" aria-describedby="basic-addon1">
                        @error('name')
                            <span class="input-group-text text-small text-danger"
                                id="basic-addon1">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            wire:model="email" autocomplete='off' placeholder="Email" aria-label="Email"
                            aria-describedby="basic-addon1">
                        @error('email')
                            <span class="input-group-text text-small text-danger"
                                id="basic-addon1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                        <input type="password" wire:model="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            aria-label="Password" aria-describedby="basic-addon1">
                        @error('password')
                            <span class="input-group-text text-small text-danger"
                                id="basic-addon1">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning btn-sm mt-3 float-end">Save</button>
                </form>

            </div>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($DataAdmin as $admin)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="#" onclick="confirmAction('{{ $admin->id }}')"><i
                                class="bi bi-trash3 text-danger fs-5"></i></a>
                        <script>
                            function confirmAction(parameter) {
                                if (confirm('Are you sure you want to proceed?')) {
                                    @this.call('delete', parameter)
                                }
                            }
                        </script>
                        <a href="#" wire:click="edit({{ $admin->id }})"><i
                                class="bi bi-pencil-square text-warning fs-5 ms-2"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
