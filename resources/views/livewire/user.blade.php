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
                <div class="row d-flex justify-content-end mr-1">
                    <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-success" wire:click="create">
                                Create User
                            </button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped table-hover" id="data-table-1">
                    <thead class="text-center">
                        <th>Education Level</th>
                        <th>Hello World</th>
                        <th>လုပ်‌ဆောင်ချက်</th>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <button class="btn btn-primary" wire:click="edit({{ $user->id }})">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if ($isOpen)
            <div class="offcanvas offcanvas.show offcanvas-end show w-100" tabindex="-1" id="offcanvasRight"
                style="width: 300px; max-width: 100%; position: absolute; top: 0; right: 0; height: 100%; border-left: 1px solid #ddd; background-color: white; z-index: 1050;"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">User Details</h5>
                    {{-- <button type="button" class="btn-close text-reset" wire:click="closeModal"
                        aria-label="Close"></button> --}}
                </div>
                <div class="offcanvas-body">
                    <form wire:submit.prevent="saveUser">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" wire:model="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" wire:model="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" wire:model="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="submit" class="btn btn-primary" wire:click="closeModal">Close</button>
                    </form>
                </div>
            </div>
        @endif
    </div>
</section>
