   <!-- Left Sidebar start -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">


                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav align-items-center" id="navbar-nav">
                        <li class="menu-title text-center "><span data-key="t-menu">Menu</span></li>
                       
                            <li class="nav-item">
                                 <a href="{{url('home')}}" class="nav-link" data-key="t-analytics"> <i class="ri-dashboard-2-line"></i> Dashboard </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('patient_details')}}" class="nav-link" data-key="t-analytics"> <i class="ri-dashboard-line"></i>  Patient Details </a>
                           </li>

                           <li class="nav-item">
                            <a href="{{url('bills')}}" class="nav-link" data-key="t-analytics"> <i class="ri-bill-line"></i>  Bills And Payments </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('enquiry')}}" class="nav-link" data-key="t-analytics"> <i class="ri-mail-line"></i> Enquiry</a>   </li>
                            

                            <li class="nav-item">
                             <a href="{{url('migration1')}}" class="nav-link" data-key="t-analytics"> <i class="ri-table-line"></i>  Migrations </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{Route('mig.rec')}}" class="nav-link" data-key="t-analytics"> <i class="ri-table-line"></i>  Migrated Patients </a>
                               </li>

                        
                       
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
        <div class="vertical-overlay"></div>
        <!-- Left Sidebar End -->

