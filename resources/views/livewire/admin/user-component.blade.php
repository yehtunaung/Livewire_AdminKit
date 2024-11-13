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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <span class="badge bg-info rounded-pill"
                                            style="padding: 7px;font-size:12px;">{{ $role->title }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <x-edit-button :id="$user->id" function="edit"></x-edit-button>
                                    <x-delete-button :id="$user->id"></x-delete-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>

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


                    {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label class="required" for="role_ids">Select Role</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all"
                                    style="border-radius: 0">{{ trans('select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all"
                                    style="border-radius: 0">{{ trans('deselect_all') }}</span>
                            </div>
                            <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}"
                                name="role_ids[]"  wire:model="role_ids" id="role_ids" multiple >
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ in_array($role->id, old('roles', [])) ? 'selected' : '' }}>{{ $role->title }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="role_error"></span>
                            @if ($errors->has('roles'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('roles') }}
                                </div>
                            @endif
                            {{-- <span class="help-block">{{ trans('cruds.role.fields.roles_helper') }}</span> --}}
                    {{-- </div>
                    </div>  --}}

                </x-slot>
                

            

                <x-slot name="actions">

                    <x-save-button :function="$userId ? 'update' : 'store'"></x-save-button>

                    <x-cancel-button function="closeModal"></x-cancel-button>
                </x-slot>
        </x-create-form-offcanvas>
    </div>
</section>
