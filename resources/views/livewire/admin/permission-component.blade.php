
<section class="content-header">
    <div class="container-fluid">
        <div class="card mb-1">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="card-title">Permissions List</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    @can('permission_create')
                    <x-create-button title="Permission" function="create"></x-create-button>
                    @endcan
                </div>
                <table class="table table-bordered table-striped table-hover" id="data-table-1">
                    <thead class="text-center">
                        <th>No</th>
                        <th>Title</th>
                        <th>Action</th>


                    </thead>
                    <tbody id="tableBody">
                        @foreach ($permissions as $permission)
                        <tr wire:key="permission-{{ $permission->id }}">
                            <td scope="row">{{ $permission->id }}</td>
                                <td>{{ $permission->title }}</td>

                                <td>
                                    @can('permission_edit')
                                    <x-edit-button :id="$permission->id" function="edit"></x-edit-button>

                                    @endcan

                                    @can('permission_delete')
                                    <x-delete-button :id="$permission->id" ></x-delete-button>

                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $permissions->links() }}
            </div>
        </div>



        @canany(['permission_create','permission_edit'])


        <x-create-form-offcanvas :submit="$permissionId ? 'update' : 'store'" :isOpen="$isOpen">
            <x-slot name="title">
                <h5 id="offcanvasRightLabel">{{ __('Permission Create') }}</h5>
            </x-slot>

            <x-slot name="form">
                <div class="col-md-4">
                    <label for="title" class="form-label">Title</label>
                    <x-input id="title" wire:model="title"/>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              </x-slot>

            <x-slot name="actions">

                    <x-save-button :function="$permissionId ? 'update' : 'store'" ></x-save-button>
                    <x-cancel-button function="closeModal" ></x-cancel-button>
            </x-slot>

        </x-create-form-offcanvas>
        @endcanany
    </div>
</section>


