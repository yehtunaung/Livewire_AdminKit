@props(['function'])
<x-success-button wire:click="{{ $function }}">
    <div wire:loading wire:target="{{ $function }}">
        <div class="spinner-grow spinner-grow-sm"></div>
    </div>
    {{ __('Save') }}
</x-success-button>
