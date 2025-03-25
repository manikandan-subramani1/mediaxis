@extends('layouts.admin')

@section('section')

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                    <h4 class="mb-sm-0">Job Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Job Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Work Orders</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="36894">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="total_jobs" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!--end col-->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Completed Jobs</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="28410">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="apply_jobs" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Pending Jobs</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="4305">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="new_jobs_chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Rejected</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="5021">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="interview_chart" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> High Priority</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="3948">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="hired_chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!--end col-->
                                        <div class="col-xl-6 col-md-6">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-success)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Shippment</p>
                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="1340">0</span></h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="rejected_chart" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div><!--end row-->
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-6">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">High Priority Works</h4>
                                       
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-secondary-subtle rounded">
                                                                        <img src="assets/images/companies/img-1.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Force Medicines</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Cullera, Spain
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-warning-subtle rounded">
                                                                        <img src="assets/images/companies/img-3.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Syntyce Solutions</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Mughairah, UAE
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-primary-subtle rounded">
                                                                        <img src="assets/images/companies/img-2.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Moetic Fashion</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Mughairah, UAE
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-danger-subtle rounded">
                                                                        <img src="assets/images/companies/img-4.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Meta4Systems</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Germany
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                                    <div class="avatar-title bg-danger-subtle rounded">
                                                                        <img src="assets/images/companies/img-5.png" alt="" height="16">
                                                                    </div>
                                                                </div>
                                                                <h6 class="mb-0">Themesbrand</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Limestone, US
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="align-items-center mt-4 pt-2 justify-content-between d-md-flex">
                                            <div class="flex-shrink-0 mb-2 mb-md-0">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                                </div>
                                            </div>
                                            <ul class="pagination pagination-separated pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link">←</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">→</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div><!--end col-->
                        </div><!--end row-->
                        
                      
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <h4 class="card-title mb-0 flex-grow-1">Assigned Jobs</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control" id="searchResultList" placeholder="Search for jobs...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@endsection
