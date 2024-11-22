<x-create-form-offcanvas :submit="$userId ? 'update' : 'store'" :isOpen="$isOpen">
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
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="role_ids" class="form-label">Role</label>
                    <x-select class="form-control" wire:model="role_ids" id="role_ids" required>
                        <option value="">Select Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->title }}</option>
                        @endforeach
                    </x-select>
                    @error('role_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                </div>

            </x-slot>
            

        

            <x-slot name="actions">

                <x-save-button :function="$userId ? 'update' : 'store'"></x-save-button>

                <x-cancel-button function="closeModal"></x-cancel-button>
            </x-slot>
</x-create-form-offcanvas>
