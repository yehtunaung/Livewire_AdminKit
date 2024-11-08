<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-primary']) }} style="padding:8px; border-radius:7px;background-color:blue;" wire:loading.attr="disabled">
    {{ $slot }}
</button>
