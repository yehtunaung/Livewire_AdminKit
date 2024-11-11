<section class="content-header">
    <div class="container-fluid">
        <div class="card mb-1">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="card-title">User List</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <x-create-button title="User" function="create"></x-create-button>
                </div>

                <table class="table table-bordered table-striped table-hover" id="data-table-1">
                    <thead class="text-center">
                        <th>No</th>
                        <th>User Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <x-edit-button :id="$user->id" function="edit"></x-edit-button>
                                    <x-delete-button :id="$user->id" ></x-delete-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <x-create-form-offcanvas submit='store' :isOpen="$isOpen">
            <x-slot name="title">
                <h5 id="offcanvasRightLabel">{{ __('User Create') }}</h5>
            </x-slot>

            <x-slot name="form">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <x-input id="name" wire:model="name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <x-input type="email" id="email" wire:model="email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <x-input type="password" id="password" wire:model="password" />
                             @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                
                        </div>

                    </div>

            </x-slot>

            <x-slot name="actions">
              
                <x-save-button :function="$userId ? 'update' : 'store'"></x-save-button>

                <x-cancel-button function="closeModal" ></x-cancel-button>
            </x-slot>

        </x-create-form-offcanvas>
    </div>
</section>
