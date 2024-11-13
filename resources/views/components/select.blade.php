@props(['id'])
<select {{ $attributes->merge([
   'class' => 'form-control' . ($errors->has($id) ? ' border-danger' : ''),
    'style' => 'padding:8px; border-radius:7px; box-shadow:none;',
]) }} wire:loading.attr="disabled">
{{ $slot }}
</select>