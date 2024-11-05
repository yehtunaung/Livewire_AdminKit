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
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Create User
                            </button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped table-hover" id="data-table-1">
                    <thead class="text-center">
                        <th>Eduction Level</th>
                        <th>Hello World</th>
                        <th>လုပ်‌ဆောင်ချက်</th>
                    </thead>
                    <tbody id="tableBody">
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">User Create</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="required form-label" for="name">User Name</label>
                                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        type="text" name="name" id="name" wire:model="name">
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-12">
                                    <label class="required form-label" for="email">Email</label>
                                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        type="email" name="email" id="email" wire:model="email">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-12">
                                    <label class="required form-label" for="password">Password</label>
                                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        type="password" name="password" id="password" wire:model="password">
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary font-weight-semibold mt-3"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success font-weight-semibold mt-3"
                                    wire:click.prevent="create">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">Toggle right offcanvas</button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>
</section>
