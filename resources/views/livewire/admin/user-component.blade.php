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

       <x-users.create :$userId :$isOpen :$roles></x-users-create>
    </div>
</section>
