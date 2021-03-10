<aside class="left-sidebar fixed-top" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar  ">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('dash') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">{{ __('Dashboard') }}</span></a></li>
               
           @can('admin.manage', Auth::user())
               
           
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu">{{__('Users')}} </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('users.index') }}" class="sidebar-link"><i
                                    class="mdi mdi-account-switch"></i><span class="hide-menu"> {{__('List Of Users')}}
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('users.create') }}" class="sidebar-link"><i
                                    class="mdi mdi-account-plus"></i><span class="hide-menu"> {{__('Add User')}}
                                </span></a></li>
                    </ul>
                </li>



                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                        class="hide-menu">{{__('Cities')}} </span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{ route('villes.index') }}" class="sidebar-link"><i
                                class="mdi mdi-account-switch"></i><span class="hide-menu"> {{__('List Of Cities')}}
                            </span></a></li>
                    <li class="sidebar-item"><a href="{{ route('villes.create') }}" class="sidebar-link"><i
                                class="mdi mdi-account-plus"></i><span class="hide-menu"> {{__('Add City')}}
                            </span></a></li>
                </ul>
            </li>
                @endcan
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>