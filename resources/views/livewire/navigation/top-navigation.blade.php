<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator">4</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">4 New Notifications</div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-danger" data-feather="alert-circle"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Update completed</div>
                                    <div class="text-muted small mt-1">
                                        Restart server 12 to complete the update.
                                    </div>
                                    <div class="text-muted small mt-1">30m ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-warning" data-feather="bell"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Lorem ipsum</div>
                                    <div class="text-muted small mt-1">
                                        Aliquam ex eros, imperdiet vulputate hendrerit et.
                                    </div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-primary" data-feather="home"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Login from 192.186.1.8</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">
                                        Christina accepted your request.
                                    </div>
                                    <div class="text-muted small mt-1">14h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">Show all notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="message-square"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                    <div class="dropdown-menu-header">
                        <div class="position-relative">4 New Messages</div>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/RonaldCodesLogo.png') }}"
                                        class="avatar img-fluid rounded-circle" alt="Vanessa Tucker" />
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Vanessa Tucker</div>
                                    <div class="text-muted small mt-1">
                                        Nam pretium turpis et arcu. Duis arcu tortor.
                                    </div>
                                    <div class="text-muted small mt-1">15m ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/RonaldCodesLogo.png') }}"
                                        class="avatar img-fluid rounded-circle" alt="William Harris" />
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">William Harris</div>
                                    <div class="text-muted small mt-1">
                                        Curabitur ligula sapien euismod vitae.
                                    </div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/RonaldCodesLogo.png') }}"
                                        class="avatar img-fluid rounded-circle" alt="Christina Mason" />
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Christina Mason</div>
                                    <div class="text-muted small mt-1">
                                        Pellentesque auctor neque nec urna.
                                    </div>
                                    <div class="text-muted small mt-1">4h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/RonaldCodesLogo.png') }}"
                                        class="avatar img-fluid rounded-circle" alt="Sharon Lessman" />
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Sharon Lessman</div>
                                    <div class="text-muted small mt-1">
                                        Aenean tellus metus, bibendum sed, posuere ac,
                                        mattis non.
                                    </div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">Show all messages</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <!-- Mobile Dropdown Icon (Visible on small screens) -->
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="align-middle" data-feather="settings"></i>
                </a>
            
                <!-- Desktop Dropdown (Visible on larger screens) -->
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/images/RonaldCodesLogo.png') }}" class="avatar img-fluid rounded me-1" alt="{{ Auth::user()->name }}" />
                    <span class="text-dark">{{ Auth::user()->name }}</span>
                </a>
            
                <!-- Dropdown Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="pages-profile.html">
                        <i class="align-middle me-1" data-feather="user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="align-middle me-1" data-feather="pie-chart"></i> Analytics
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html">
                        <i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="align-middle me-1" data-feather="help-circle"></i> Help Center
                    </a>
                    <div class="dropdown-divider"></div>
            
                    <!-- Logout (Wireclick functionality for Livewire logout) -->
                    <div wire:click='logoutUser' class="dropdown-item" style="cursor: pointer;">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="ml-2">Log out</span>
                    </div>
                </div>
            </li>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
        </ul>
    </div>
</nav>
