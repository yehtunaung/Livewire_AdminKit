@props(['submit','isOpen'])
<div class="offcanvas {{ $isOpen ? 'show' : '' }} position-absolute top-0 end-0  w-100 w-md-75 w-lg-50 w-xl-25 ms-md-4 ms-lg-5" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" 
    style="width: calc(100% - 250px); right: 0;">

    <div class="offcanvas-header">
        {{ $title }}
    </div>

    <div class="offcanvas-body">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="grid grid-cols-6 gap-6">
                {{ $form }}
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-black text-white text-end">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>

</div>
