<section class="content-header">
    <div class="container-fluid">
        <div class="card mb-1">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="card-title">Post List</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
             <div>
                <x-create-button title="Post" function="create"></x-create-button>

             </div>
                
                <table class="table table-bordered table-striped table-hover" id="data-table-1">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr wire:key="post-{{ $post->id }}">
                                <td scope="row">{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>
                                    <span class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil cursor-pointer" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                      </svg>
                                    </span>
                                    <span  class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                          </svg>
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No posts found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $posts->links() }}
            </div>
        </div>

            <x-create-form-offcanvas submit="store"  :isOpen="$isOpen">
                <x-slot name="title">
                    <h5 id="offcanvasRightLabel">{{ __('Post Details') }}</h5>
                </x-slot>

                <x-slot name="form">
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" wire:model="title" class="form-control" id="title"
                            placeholder="Enter post title">
                        <span class="text-danger">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="body">Post Body</label>
                        <textarea wire:model="body" class="form-control" id="body" rows="4" placeholder="Enter post body"></textarea>
                        <span class="text-danger">
                            @error('body')
                                {{ $message }}
                            @enderror
                        </span>
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




{{-- Testing  --}}

  <!-- Offcanvas for Post Details -->
  {{-- <div class="offcanvas {{ $isOpen ? 'show' : '' }}" id="offcanvasRight">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Post Details</h5>
    </div>
    <div class="offcanvas-body">
        <form wire:submit.prevent="store">
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" wire:model="title" class="form-control" id="title" placeholder="Enter post title">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="body">Post Body</label>
                <textarea wire:model="body" class="form-control" id="body" rows="4" placeholder="Enter post body"></textarea>
                @error('body') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-success mt-4">Save</button>
            <button type="button" wire:click="closeModal" class="btn btn-primary mt-4">Close</button>
        </form>
    </div>
</div> --}}
