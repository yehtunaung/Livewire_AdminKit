<div>
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content">
            <a class="sidebar-brand" href="{{ route('dashboard') }}" >
                <span class="align-middle">AdminKit</span>
            </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>
            <li class="sidebar-item active">
            <li class="sidebar-item {{ Request::is('index') ? 'active' : '' }} " >
                <a class="sidebar-link" href="{{ route('dashboard') }}" >
                    <i class="bi bi-binoculars-fill align-middle"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/permission') ? 'active' : '' }}" >
                <a class="sidebar-link" href="{{ route('admin.permission') }}" >
                    <i class="bi bi-postcard-fill align-middle"></i>
                    <span class="align-middle">Permission</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/user') ? 'active' : '' }}" >
                <a class="sidebar-link" href="{{ route('admin.user') }}"  >
                    <i class="bi bi-people-fill align-middle"></i>
                    <span class="align-middle">User</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/posts') ? 'active' : '' }}" >
                <a class="sidebar-link" href="{{ route('admin.posts') }}" >
                    <i class="bi bi-postcard-fill align-middle"></i>
                    <span class="align-middle">Post</span>
                </a>
            </li>
            </ul>
        </div>
    </nav>




</div>
