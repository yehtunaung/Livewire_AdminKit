@props(['submit','isOpen'])

<div class="offcanvas {{ $isOpen ? 'show' : '' }}" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

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
