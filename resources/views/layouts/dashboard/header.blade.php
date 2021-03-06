
<header class="topbar mb-5" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark ">
        <div class="navbar-header" data-logobg="skin5">
            
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b class="logo-icon ps-2 mr-0 ml-0">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('assets/images/MC Pharma.png') }}" style="width: 60px; height:60px;" alt="homepage" class="light-logo" />

                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text 
                    <img src="{ asset('assets/images/logo-text.png') }}" alt="homepage" class="light-logo" />
-->
                <img src="{{ asset('assets/images/mclogo.png') }}" alt="homepage" class="light-logo" />


                </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->



        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav  mr-auto">
                <li class="nav-item d-none d-lg-block"><a
                        class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                
                
            </ul>
<!-- left -->

            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ml-auto">
              
                          
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== --
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                            My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                            My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i
                                class="ti-settings me-1 ms-1"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i
                                class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="ps-4 p-10"><a href="javascript:void(0)"
                                class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div>
                    </ul>
                </li>

                 <!- Authentication Links -->
                   
                 <li class="nav-item dropdown">
                    <a id="navbarDropdow" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }} <i class="fas fa-arrow-down"></i> <span class="caret"></span>
                    </a>
                  

                    <div class="dropdown-menu dropdown-menu-right  user-dd animated" aria-labelledby="navbarDropdow">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('profile_edit')}}"><i
                            class="fas fa-edit me-1 ms-1"></i> {{__('Edit Profile')}}</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('settings')}}"><i
                                class="ti-settings me-1 ms-1"></i> {{__('Account Setting')}}</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i
                                class="fa fa-power-off me-1 ms-1"></i> {{__('Logout')}}</a>
                        <div class="dropdown-divider"></div>
                        
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>





