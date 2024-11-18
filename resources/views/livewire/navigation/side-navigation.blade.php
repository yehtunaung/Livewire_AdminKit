<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }} ">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item {{ Request::is('admin/permission*') || Request::is('admin/roles*') || Request::is('admin/user*') ? 'menu-open' : '' }}">
                <a data-bs-target="#userManagement" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('admin/permission*') || Request::is('admin/roles*') || Request::is('admin/user*') ? 'active' : '' }}">
                    <i class="align-middle" data-feather="user-check"></i>
                    <span class="align-middle">User Management</span>
                </a>
                <ul class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin/permission*') || Request::is('admin/roles*') || Request::is('admin/user*') ? 'show' : '' }}"
                    id="userManagement" data-bs-parent="#sidebar">
                    @can('permission_access')
                    <li class="sidebar-item {{ Request::is('admin/permission') ? 'active' : '' }}">
                        <a href="{{ route('admin.permission') }}" class="sidebar-link"><i
                                class="bi bi-lock-fill align-middle"></i>Permission</a>
                    </li>
                    @endcan


                    <li class="sidebar-item {{ Request::is('admin/roles') ? 'active' : '' }}">
                        <a href="{{ route('admin.roles') }}" class="sidebar-link"><i
                                class="bi bi-segmented-nav align-middle"></i>Roles</a>
                    </li>

                    <li class="sidebar-item {{ Request::is('admin/user') ? 'active' : '' }}">
                        <a href="{{ route('admin.user') }}" class="sidebar-link"><i
                                class="bi bi-people-fill align-middle"></i>User</a>
                    </li>
                </ul>
            </li>


            {{-- <li class="sidebar-item {{ Request::is('admin/permission') ? 'active' : '' }}" >
                <a class="sidebar-link" href="{{ route('admin.permission') }}" >
                    <i class="bi bi-postcard-fill align-middle"></i>
                    <span class="align-middle">Permission</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/roles') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.roles') }}">
                    <i class="bi bi-segmented-nav align-middle"></i>
                    <span class="align-middle">Roles</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/user') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.user') }}">
                    <i class="bi bi-people-fill align-middle"></i>
                    <span class="align-middle">User</span>
                </a>
            </li> --}}

            <li class="sidebar-item {{ Request::is('admin/posts') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.posts') }}">
                    <i class="bi bi-postcard-fill align-middle"></i>
                    <span class="align-middle">Post</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
