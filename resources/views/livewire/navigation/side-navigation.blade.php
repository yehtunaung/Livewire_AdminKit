<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}" >
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>
            <li class="sidebar-item active">
            <li class="sidebar-item {{ Request::is('index') ? 'active' : '' }} " >
                <a class="sidebar-link" href="{{ route('dashboard') }}" wire:navigate>
                    {{-- <i class="align-middle" data-feather="sliders"></i> --}}
                    <i class="bi bi-binoculars-fill align-middle"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/user') ? 'active' : '' }}" >
                <a class="sidebar-link" href="{{ route('admin.user') }}" wire:navigate >
                    {{-- <i class="align-middle" data-feather="user"></i> --}}
                    <i class="bi bi-people-fill align-middle"></i>
                    <span class="align-middle">User</span>,
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/posts') ? 'active' : '' }}" >
                <a class="sidebar-link" href="{{ route('admin.posts') }}" wire:navigate>
                    {{-- <i class="align-middle" data-feather="user"></i> --}}
                    <i class="bi bi-postcard-fill align-middle"></i>
                    <span class="align-middle">Post</span>
                </a>
            </li>

            <li class="sidebar-header">Auth</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('login') }}" >
                    <i class="align-middle" data-feather="log-in"></i>
                    <span class="align-middle">Sign In</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('register') }}" >
                    <i class="align-middle" data-feather="user-plus"></i>
                    <span class="align-middle">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
