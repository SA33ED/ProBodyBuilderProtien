        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
            </div>
            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">

                </li>
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">

                {{-- <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li> --}}
                {{-- <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ti-bell"></i>
                        <span class="badge badge-danger notification-status"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                        <div class="dropdown-header notifications">
                            <strong>Notifications</strong>
                            <span class="badge badge-pill badge-warning">05</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">New registered user <small
                                class="float-right text-muted time">Just now</small> </a>
                        <a href="#" class="dropdown-item">New invoice received <small
                                class="float-right text-muted time">22 mins</small> </a>
                        <a href="#" class="dropdown-item">Server error report<small
                                class="float-right text-muted time">7 hrs</small> </a>
                        <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1
                                days</small> </a>
                        <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2
                                days</small> </a>
                    </div>
                </li> --}}

                {{-- <li class="nav-item dropdown ">

                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big">
                        <div class="dropdown-header">
                            <strong>Quick Links</strong>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i>
                                <h5>New Task</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i>
                                <h5>Assign Task</h5>
                            </a>
                        </div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
                                <h5>Add Orders</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-truck text-danger "></i>
                                <h5>New Orders</h5>
                            </a>
                        </div>
                    </div>
                </li> --}}

                    <a class="navbar-brand brand-logo" href="{{route("dashboard")}}"><h4>{{ Auth::user()->name }}</h4></a>
                <li class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset("img/user-solid.svg")}}" alt="avatar">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">{{ Auth::user()->name }}</h5>
                                    <span>{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route("profile.edit")}}"><i class="text-warning ti-user"></i>Profile</a>

                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="text-danger ti-unlock"></i>Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!--=================================
 header End-->
