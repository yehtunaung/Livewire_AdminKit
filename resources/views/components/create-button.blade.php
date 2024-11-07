@props(['title', 'function'])
<div class="d-flex justify-content-end mb-3">
    <x-success-button wire:click="{{ $function }}">
        <div wire:loading wire:target="{{ $function }}">
            <div class="spinner-grow spinner-grow-sm">
            </div>
        </div>
        {{ __('Create') }} {{ $title }}
    </x-success-button>
</div>
