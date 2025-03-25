  <!-- ========== App Menu ========== -->
  <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>
    
                <div class="dropdown sidebar-user m-1 rounded">
                    <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center gap-2">
                            <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="text-start">
                                <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                                <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Anna!</h6>
                   </div>
                </div>
                <div id="scrollbar">
                    <div class="container-fluid">


                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="" >
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                                </a>
                              
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{route('customer.create-job-work')}}" >
                                    <i class="ri-more-fill"></i> <span data-key="t-dashboards">Work Order</span>
                                </a>
                               
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="" >
                                    <i class="ri-rocket-line"></i> <span data-key="t-dashboards">Task Reports</span>
                                </a>                                
                            </li> <!-- end Dashboard Menu -->


                            <li class="nav-item">
                                <a class="nav-link menu-link" href="" >
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Email</span>
                                </a>  
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="" >
                                    <i class="ri-file-list-3-line"></i> <span data-key="t-dashboards">File Manager</span>
                                </a> 
                              
                            </li>

                            <li class="nav-item">
                               <a class="nav-link menu-link" href="" >
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-dashboards">Support</span>
                                </a> 
                            </li>

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Other Modules</span></li>

                            <li class="nav-item">
                                                   <a href="{{route('customer.logout')}}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-primary"><i class="ri-account-circle-line"></i>Logout</a>
                                                     <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                     </form>
                            </li>


                          


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>