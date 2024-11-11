<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-danger']) }} style="padding:8px; border-radius:7px;background-color:red;" wire:loading.attr="disabled">
    {{ $slot }}
</button>
