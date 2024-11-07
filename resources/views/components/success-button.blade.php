<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-success']) }} style="padding:8px; border-radius:7px;background-color:green;" wire:loading.attr="disabled">
    {{ $slot }}
</button>
