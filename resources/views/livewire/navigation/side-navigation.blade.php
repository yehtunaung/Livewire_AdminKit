<div>
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content">
            <a class="sidebar-brand" href="{{ route('dashboard') }}" >
                <span class="align-middle">AdminKit</span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">Pages</li>
                <li class="sidebar-item active">
                <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }} " >
                    <a class="sidebar-link" href="{{ route('dashboard') }}" >
                        <i class="align-middle" data-feather="sliders"></i>
                        <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/user') ? 'active' : '' }}" >
                    <a class="sidebar-link" href="{{ route('admin.user') }}" >
                        <i class="align-middle" data-feather="user"></i>
                        <span class="align-middle">User</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/posts') ? 'active' : '' }}" >
                    <a class="sidebar-link" href="{{ route('admin.posts') }}" >
                        <i class="align-middle" data-feather="user"></i>
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




</div>
