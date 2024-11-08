@props(['id'])
<x-danger-button wire:click="delete({{ $id }})" onclick="return confirm('Are you sure you want to delete this item?') || event.stopImmediatePropagation()">
    <div wire:loading wire:target="delete({{ $id }})">
        <div class="spinner-grow spinner-grow-sm">
        </div>
    </div>
    <i class="bi bi-trash"></i> {{ __('Delete') }}
</x-danger-button>
