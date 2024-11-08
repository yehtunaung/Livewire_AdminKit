@props(['id', 'function'])
    <x-primary-button wire:click="{{ $function }}({{ $id }})">
        <div wire:loading wire:target="{{ $function }}({{ $id }})">
            <div class="spinner-grow spinner-grow-sm">
            </div>
        </div>
        <i class="bi bi-pencil"></i> {{ __('Edit') }}
    </x-primary-button>