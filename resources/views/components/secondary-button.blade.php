<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary ']) }} style="padding:8px; border-radius:7px;background-color:gray;" wire:loading.attr="disabled">
    {{ $slot }}
</button>
