
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
                    <x-create-button title="Permission" function="create"></x-create-button>
                </div>
                <table class="table table-bordered table-striped table-hover" id="data-table-1">
                    <thead class="text-center">
                        <th>No</th>
                        <th>Title</th>
                        <th>လုပ်‌ဆောင်ချက်</th>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($permissions as $permission)
                        <tr wire:key="permission-{{ $permission->id }}">
                            <td scope="row">{{ $permission->id }}</td>
                                <td>{{ $permission->title }}</td>
                               
                                <td>
                                    <span wire:click="edit({{ $permission->id }})" class="btn btn-primary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </span>
                                    <span wire:click="delete({{ $permission->id }})" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Delete
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <x-create-form-offcanvas submit="store" :isOpen="$isOpen">
            <x-slot name="title">
                <h5 id="offcanvasRightLabel">{{ __('Permission Create') }}</h5>
            </x-slot>

            <x-slot name="form">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" wire:model="title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              </x-slot>

            <x-slot name="actions">
                <button type="submit" class="btn btn-success mt-4">
                    {{ __('Save') }}
                </button>

                <button type="button" wire:click="closeModal"
                    class="btn btn-primary mt-4">{{ __('Cancel') }}</button>
            </x-slot>

        </x-create-form-offcanvas>
    </div>
</section>


