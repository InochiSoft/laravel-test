<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        {{--<img src="../dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <span class="brand-text font-weight-light">{{ env('APP_NAME', 'HUNTBAZAAR')  }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{--
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('plugin/admin-lte/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="">
            </div>
            <div class="info">
                <a href="/users/{{ auth()->user()->id }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>
        --}}
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard/users" class="nav-link {{ $active == 'users' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/invitations" class="nav-link {{ $active == 'invitations' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Invitations
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/audiences" class="nav-link {{ $active == 'audiences' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Audience
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/designers" class="nav-link {{ $active == 'designers' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            Designers
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
