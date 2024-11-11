@props(['function'])
    <x-secondary-button wire:click="{{ $function }}" class="ms-2">
        {{ __('Cancel') }}
    </x-secondary-button>
