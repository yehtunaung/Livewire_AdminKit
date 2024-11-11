<input {{ $attributes->merge(['type' => 'text', 'class' => 'form-control']) }}
    style="padding:8px; border-radius:7px; box-shadow:none;" wire:loading.attr="disabled" />
{{ $slot }}
