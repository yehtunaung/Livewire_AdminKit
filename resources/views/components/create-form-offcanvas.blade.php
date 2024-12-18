@props(['submit','isOpen'])
<div class="offcanvas {{ $isOpen ? 'show' : '' }} table position-absolute top-0 end-0  w-100 w-md-75 w-lg-50 w-xl-25 ms-md-4 ms-lg-5" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" 
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
                <div class="mt-3 items-center text-white ">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>

</div>
