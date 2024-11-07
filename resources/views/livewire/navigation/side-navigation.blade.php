<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item ">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item text-black"><a class='sidebar-link' href='/'>Analytics</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/dashboard-ecommerce'>E-Commerce <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/dashboard-crypto'>Crypto <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item {{ Request::is('index') ? 'active' : '' }} ">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/user') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.user') }}">
                    <i class="bi bi-people-fill align-middle"></i>
                    <span class="align-middle">User</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/posts') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.posts') }}">
                    <i class="bi bi-postcard-fill align-middle"></i>
                    <span class="align-middle">Post</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
