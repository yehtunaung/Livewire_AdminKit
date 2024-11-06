@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active sidebar-link' // active
            : 'sidebar-link'; // inactive
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:navigate>
    {{ $slot }}
</a>








{{-- 
<li class="sidebar-item {{ Request::is('admin/posts') ? 'active' : '' }}" >
    <x-responsive-nav-link href="{{ route('admin.posts') }}" :active="request()->routeIs('admin.posts.*')">
        <i class="align-middle" data-feather="user"></i>
        <span class="align-middle">{{ __('User') }}</span>
    </x-responsive-nav-link>
</li> --}}


