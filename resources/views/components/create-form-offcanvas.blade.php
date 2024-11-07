@props(['submit'])

<div class="offcanvas offcanvas-end show w-100" tabindex="-1" id="offcanvasRight"
    style="width: 300px; max-width: 100%; position: absolute; top: 0; right: 0; height: 100%; border-left: 1px solid #ddd; background-color: white; z-index: 1050; 
  transition: all ease-in-out 0.9s!important;"
    aria-labelledby="offcanvasRightLabel">

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
