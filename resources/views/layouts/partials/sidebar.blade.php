<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <!-- Main -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ Request::is('dashboard') ? 'active subdrop' : '' }}"><i
                                    data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('dashboard') }}"
                                        class="{{ Request::is('dashboard') ? 'active' : '' }}">Admin Dashboard</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- /Main -->
                <!-- Promo -->
                {{--  <li class="submenu-open">
                    <h6 class="submenu-hdr">Promo</h6>
                    <ul>
                        <li class="{{ Request::is('coupons') ? 'active' : '' }}"><a href="{{ url('coupons') }}"><i
                                    data-feather="shopping-cart"></i><span>Coupons</span></a>
                        </li>
                    </ul>
                </li>  --}}
                <!-- /Promo -->
                <!-- User Management -->
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class="{{ Request::is('users') ? 'active' : '' }}"><a href="{{ url('users') }}"><i
                                    data-feather="user-check"></i><span>Users</span></a>
                        </li>
                        <li class="{{ Request::is('roles-permissions', 'permissions') ? 'active' : '' }}"><a
                                href="{{ url('roles-permissions') }}"><i data-feather="shield"></i><span>Roles &
                                    Permissions</span></a></li>
                        <li class="{{ Request::is('delete-account') ? 'active' : '' }}"><a
                                href="{{ url('delete-account') }}"><i data-feather="lock"></i><span>Delete Account
                                    Request</span></a></li>
                    </ul>
                </li>
                <!-- /User Management -->
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
