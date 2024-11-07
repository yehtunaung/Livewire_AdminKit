@props(['title','function'])
<div class="d-flex justify-content-end mb-3">
    <x-success-button wire:click="{{$function}}" wire:loading.attr="disabled">
        {{ __('Create') }}  {{ $title }}
    </x-success-button>
</div>