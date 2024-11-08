<section class="content-header">
    <div class="container-fluid">
        <div class="card mb-1">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="card-title">Role List</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <x-create-button title="Role" function="create"></x-create-button>
                </div>

                <table class="table table-bordered table-striped table-hover" id="data-table-1">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            <tr wire:key="role-{{ $role->id }}">
                                <td scope="row">{{ $role->id }}</td>
                                <td>{{ $role->title }}</td>
                                <td>
                                    <x-edit-button :id="$role->id" function="edit" />
                                    <x-delete-button :id="$role->id" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No role found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $roles->links() }}
            </div>
        </div>

        <x-create-form-offcanvas :submit="$roleId ? 'update' : 'store'" :isOpen="$isOpen">
            <x-slot name="title">
                <h5 id="offcanvasRightLabel">{{ __('Role Details') }}</h5>
            </x-slot>

            <x-slot name="form">
                <div class="form-group">
                    <label for="title">Role Title</label>
                    <input type="text" wire:model="title" class="form-control" id="title"
                        placeholder="Enter role title">
                    <span class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-save-button :function="$roleId ? 'update' : 'store'" />

                <x-cancel-button function="closeModal"/>
            </x-slot>
        </x-create-form-offcanvas>

    </div>
</section>
