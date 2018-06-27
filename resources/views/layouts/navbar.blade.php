
    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"> <b>{{ config('app.name') }} </b>{{ config('app.name_last') }}</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->

        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('images/avatar.png')}}" class="avatar avatar-sm" alt="logo">
                            Hello {{Auth::user()->name}} <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">Account</div>

                                <a href="{{ route('users.profile',Auth::user()->id) }}" class="dropdown-item">
                                    <i class="fa fa-user"></i> Profile
                                </a>

                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> Messages
                                </a>

                                <div class="dropdown-header">Settings</div>

                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-bell"></i> Notifications
                                </a>

                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-wrench"></i> Settings
                                </a>

                                <a href="/logout" class="dropdown-item">
                                    <i class="fa fa-lock"></i> Logout
                                </a>
                            </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
