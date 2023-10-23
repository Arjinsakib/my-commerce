<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">

        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('dashboard')}}">
                <b>
                </b>
                <span>

                 <img src="" class="light-logo" alt=""/>Easy Shop</span> </a>
        </div>

        <div class="navbar-collapse">

            <ul class="navbar-nav me-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>

                <li class="nav-item">
                    <form class="app-search d-none d-md-block d-lg-block">
                        <input type="text" class="form-control" placeholder="Search & enter">
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('/')}}admin/assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-end animated flipInY">

                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>

                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>

                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>

                        <div class="dropdown-divider"></div>

                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>

                        <div class="dropdown-divider"></div>

                        <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="fa fa-power-off"></i> Logout</a>

                        <form action="{{route('logout')}}" id="logoutForm" method="POST">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
