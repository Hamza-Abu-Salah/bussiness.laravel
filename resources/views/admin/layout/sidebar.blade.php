<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('web.index') }}" class="brand-link">
        <img src="{{ asset('adminassets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Bussines</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminassets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link  {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    <a href="{{ route('admin.home.index') }}"
                        class="nav-link  {{ request()->routeIs('admin.home*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-house-user"></i>
                        <p>
                            Home
                        </p>
                    </a>

                    <a href="{{ route('admin.about.index') }}"
                        class="nav-link  {{ request()->routeIs('admin.about*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-star"></i>
                        <p>
                            About
                        </p>
                    </a>

                    <a href="{{ route('admin.services.index') }}"
                        class="nav-link  {{ request()->routeIs('admin.services*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-heart"></i>
                        <p>
                            Services
                        </p>
                    </a>


                    <a href="{{ route('admin.blogs.index') }}"
                        class="nav-link  {{ request()->routeIs('admin.blogs*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Blogs
                        </p>
                    </a>

                    <a href="{{ route('admin.content.index') }}"
                        class="nav-link  {{ request()->routeIs('admin.content*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-comment-sms"></i>
                        <p>
                            Content
                        </p>
                    </a>

                    <a href="{{ route('admin.settings.index') }}"
                        class="nav-link  {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
