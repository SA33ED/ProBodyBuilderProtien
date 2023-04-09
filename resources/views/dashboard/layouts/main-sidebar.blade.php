<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->

                    <li>
                        <a href="{{route("dashboard")}}"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span> </a>
                    </li>

                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>

                    <li>
                        <a href="{{route("protiens")}}"><i class="ti-menu-alt text-primary"></i><span class="right-nav-text">Protiens</span> </a>
                    </li>

                    <li>
                        <a href="{{route("protiensTrash")}}"><i class="fa fa-trash text-danger"></i><span class="right-nav-text">Deleted Protiens</span> </a>
                    </li>

                    <li>
                        <a href="{{route("orders")}}"><i class="ti-truck text-light "></i><span class="right-nav-text">Incoming Orders</span>  </a>
                    </li>

                    <li>
                        <a href="{{route("underProcessingOrders")}}"><i class="ti-pencil-alt text-warning"></i><span class="right-nav-text">Under Processing Orders</span>  </a>
                    </li>

                    <li>
                        <a href="{{route("doneOrders")}}"><i class="ti-check-box text-success"></i><span class="right-nav-text">Done Orders</span>  </a>
                    </li>
                    <li>
                        <a href="{{route("ordersTrash")}}"><i class="fa fa-trash text-danger"></i><span class="right-nav-text">Rejected Orders</span> </a>
                    </li>
                    <li>
                        <a  href="{{route("profile.edit")}}"><i class="text-warning ti-user"></i>Profile</a>
                    </li>
                    

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
