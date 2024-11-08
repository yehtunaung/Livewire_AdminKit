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
                                    <span wire:click="edit({{ $role->id }})" class="cursor-pointer"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil cursor-pointer" viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg>
                                    </span>
                                    <span onclick="return confirm('Are you sure you want to delete this item?') || event.stopImmediatePropagation()" wire:click="delete({{ $role->id }})" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                        </svg>
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No role found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $roles->links() }}
            </div>
        </div>

        <x-create-form-offcanvas :submit="$roleId ? 'update' : 'store'"  :isOpen="$isOpen">
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
                <x-success-button type="submit">
                    {{ __('Save') }}
                </x-success-button>

                <button type="button" wire:click="closeModal"
                    class="btn btn-primary mt-4">{{ __('Cancel') }}</button>
            </x-slot>
        </x-create-form-offcanvas>

    </div>
</section>
