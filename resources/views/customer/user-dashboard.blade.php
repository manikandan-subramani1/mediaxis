@extends('layouts.user')

@section('content')


                  
                    <!-- ============================================================== -->
                    <!-- Start right Content here -->
                    <!-- ============================================================== -->
                    @foreach ($data['pat'] as $pat )
                    @isset($data)
                    
                    <div class="main-content">
                        <div class="page-content" style="margin-top: 24px !important;">
                            <div class="container-fluid">
                                <div class="profile-foreground position-relative mx-n4 mt-n4">
                                    <div class="profile-wid-bg">
                                        <img src="{{asset('assets/images/galaxy/img-2.png')}}" alt="" class="profile-wid-img" />
                                    </div>
                                </div>

                                <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper align-items-center">
                                    <div class="row g-4">
                                        <div class="col-auto">
                                            <div class="avatar-xxl">
                                                <img src="{{asset('./uploads/Profiles/'.$pat->image)}}" class="img-thumbnail rounded-circle " />
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col">
                                            <div class="p-3">
                                                <h3 class="text-white mb-1 text-uppercase">{{$pat->first_name}} {{$pat->last_name}}</h3>
                                                <p class="text-white text-opacity-75">PATIENT ID :{{$pat->patient_id}}</p>
                                                <div class="hstack text-white-50 gap-1">
                                                    <div class="me-2"><i
                                                            class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{$pat->city}} </div>
                                                    <div>
                                                        <i
                                                            class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{$pat->state}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                    </div>
                                    <!--end row-->
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div>
                                            <div class="d-flex profile-wrapper">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab"
                                                            role="tab">
                                                            <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                                                class="d-none d-md-inline-block">Profile & Treatment History</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities"
                                                            role="tab">
                                                            <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                                                class="d-none d-md-inline-block">Bills & Payments</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                                            <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span
                                                                class="d-none d-md-inline-block">Insurance</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                                            <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                                                class="d-none d-md-inline-block">Migrations</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <!-- start profile Tab panes -->
                                            <div class="tab-content pt-4 text-muted">
                                                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-xxl-4">
                                                            <div class="card bg-success-subtle">
                                                                <div class="card-body">
                                                                    <h5 class="card-title mb-5">Completed Your Profile</h5>
                                                                    <div
                                                                        class="progress animated-progress custom-progress progress-label">
                                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                                            style="width: 80%" aria-valuenow="30" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                            <div class="label">80%</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card bg-success-subtle">
                                                                <div class="card-body">
                                                                    <h5 class="card-title mb-3">Info</h5>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-borderless mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Patient Id:</th>
                                                                                    <td class="text-muted">{{$pat->patient_id}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Full Name :</th>
                                                                                    <td class="text-muted">{{$pat->first_name}} {{$pat->last_name}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Mobile :</th>
                                                                                    <td class="text-muted">{{$pat->mobile_1}}
                                                                                        <br> {{$pat->mobile_2}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">E-mail :</th>
                                                                                    <td class="text-muted">{{$pat->email}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">blood group :</th>
                                                                                    <td class="text-muted">{{$pat->blood}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Date Of Birth:</th>
                                                                                    <td class="text-muted">{{$pat->dob}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">gender:</th>
                                                                                    <td class="text-muted">{{$pat->gender}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">maritial status:</th>
                                                                                    <td class="text-muted">{{$pat->marital}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">address-1:</th>
                                                                                    <td class="text-muted">{{$pat->address_1}},<br>{{$pat->city}}-{{$pat->zip}},<br>{{$pat->state}}</td>
                                                                                </tr>
                                                                               
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Guardient name:</th>
                                                                                    <td class="text-muted">{{$pat->emergency_contact_name}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Guardient mobile:</th>
                                                                                    <td class="text-muted">{{$pat->emergency_contact_mobile}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Relationship:</th>
                                                                                    <td class="text-muted">{{$pat->emergency_contact_relationship}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">Guardient Address:</th>
                                                                                    <td class="text-muted">{{$pat->emergency_contact_address}},<br>
                                                                                        {{$pat->emergency_contact_city}}-{{$pat->emergency_contact_zip}},<br>
                                                                                        {{$pat->emergency_contact_state}}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="ps-0" scope="row">registered On:</th>
                                                                                    <td class="text-muted">{{$pat->created_at}}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div><!-- end card body -->
                                                            </div><!-- end card -->


                                                        </div>
                                                        <!--end col-->
                                                        @endisset
                                                        @endforeach

                                                        <div class="col-xxl-8">
                                                            <div class="card bg-success-subtle">
                                                                <div class="card-body align-items-center">
                                                            <div class="row ">
                                                                <div class="col-lg-12 mt-4 text-center">
                                                                    <div>
                                                                        <h2 class="text-center text-black">Treatment History</h2>
                                                                        <div class="timeline">
                                                                            @foreach ($data['treatment'] as $treat )
                                                                            
                                                                            <div class="timeline-item right ">
                                                                                <i class="icon ri-stack-line"></i>
                                                                                <div class="date">{{$treat->date}}</div>
                                                                                <div class="content">
                                                                                    <div class="d-flex">
                                                                                        <div class="flex-shrink-0">
                                                                                            <img src="{{asset('./uploads/Profiles/'.$pat->image)}}" alt="" class="avatar-sm rounded material-shadow-none">
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h5 class="fs-15">{{$treat->name}} 
                                                                                                <small class="text-muted fs-13 fw-normal">- {{$treat->patient_id}} </small><br>
                                                                                                <small class="text-muted
                                                                                                fs-13 fw-normal">-for {{$treat->treatment}} </small>
                                                                                            </h5>
                                                                                            <p class="text-muted mb-2">{{$treat->msg}} </p>
                                                                                            <h5> <small class="btn btn-sm btn-light">-by  {{$treat->doctor}} </small></h5> </h5>
                                                                                            <div class="hstack gap-2">
                                                                                                <a class="btn btn-sm btn-light"><span class="me-1">📅</span> {{$treat->date}} </a>
                                                                                                <a class="btn btn-sm btn-light"><span class="me-1">⌚</span>{{$treat->time}} </a>
                                                                                                <a class="btn btn-sm btn-light"><span class="me-1">💸</span>₹{{$treat->amount}} </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                           @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->


                                                        </div>
                                                        <!--end col-->
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end profile tab-pane-->

                                                 <!-- start bills Tab panes -->
                                                <div class="tab-pane fade" id="activities" role="tabpanel">
                                                    <div class="card bg-success-subtle">
                                                        <div class="card-body">
                                                            <h1 class="card-title text-center mb-3">Recent Bills & Payments</h1>
                                                           
                                                                
                                                            <!-- start page title -->
                                                           <div class="row">
                                                                <div class="col-lg-7">
                                                                    <div class="col-lg-12">
                                                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent border-bottom p-4">
                                                                            <h4 class="mb-sm-0">Recent Bill</h4>
                                                                            

                                                                        </div>
                                                                    </div>
                                                                <!-- end page title -->
                                                                <div class="row justify-content-center">
                                                                    <div class="col-xxl-11">
                                                                        <div class="card" id="demo">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    
                                                                                    <div class="card-header border-bottom-dashed p-4">
                                                                                        <div class="d-flex flex-column flex-sm-row">
                                                                                            <div class="flex-grow-1 text-center text-sm-start mb-3 mb-sm-0">
                                                                                                <img src="{{asset('assets/images/med.png')}}" class="card-logo-dark" alt="logo dark" height="200">
                                                                                                <img src="{{asset('assets/images/med.png')}}" class="card-logo card-logo-light" alt="logo light" height="300">
                                                                                            </div>
                                                                                            <div class="flex-shrink-0 text-center text-sm-end mt-sm-0 mt-3">
                                                                                                <h6><span class="text-muted fw-normal">Legal Registration No:</span><span id="legal-register-no">{{$pat->patient_id}}</span></h6>
                                                                                                <h6><span class="text-muted fw-normal">Email:</span><span id="email">mediaxis@gmail.com</span></h6>
                                                                                                <h6><span class="text-muted fw-normal">Website:</span> <a href="https://mediaxis.com/" class="link-primary" target="_blank" id="website">www.mediaxis.com</a></h6>
                                                                                                <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no">9865464427</span></h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end card-header-->
                                                                                </div><!--end col-->
                                                                                <div class="col-lg-12">
                                                                                    <div class="card-body p-4">
                                                                                        @foreach ($data['payment'] as $payt )
                                                                                        @isset($payt)
                                                                                        <div class="row g-3">
                                                                                            <div class="col-lg-3 col-6">
                                                                                                <p class="text-muted mb-2 text-uppercase fw-semibold">Invoice No</p>
                                                                                                <h5 class="fs-14 mb-0"><span id="invoice-no">{{$payt->invoice}}</span></h5>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-lg-3 col-6">
                                                                                                <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                                                                                <h5 class="fs-14 mb-0"><span id="invoice-date">{{$payt->date}}</span> <small class="text-muted" id="invoice-time">{{$payt->time}}</small></h5>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-lg-3 col-6">
                                                                                                <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                                                                                                @if($payt->payment == 'Paid')
                                                                                                    <span class="badge bg-success-subtle text-success fs-11" id="payment-status">{{$payt->payment}}</span>
                                                                                                @else
                                                                                                    <span class="badge bg-danger-subtle text-danger fs-11" id="payment-status">{{$payt->payment}}</span>
                                                                                                @endif
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-lg-3 col-6">
                                                                                                <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                                                                                <h5 class="fs-14 mb-0"><span id="total-amount">₹{{$payt->amount}}</span></h5>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                      
                                                                                    </div>
                                                                                    <!--end card-body-->
                                                                                </div><!--end col-->
                                                                                <div class="col-lg-12">
                                                                                    <div class="card-body p-4 border-top border-top-dashed">
                                                                                        <div class="row g-3">
                                                                                            <div class="col-lg-6">
                                                                                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                                                                                <p class="fw-medium mb-2" id="billing-name">MEDIAXIS</p>
                                                                                                <p class="text-muted mb-1" id="billing-address-line-1">123, Anna Salai, Chennai, Tamil Nadu</p>
                                                                                                <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">044-12345678</span></p>
                                                                                                <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">33AABCU9603R1Z2</span> </p>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-lg-6">
                                                                                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Shipping Address</h6>
                                                                                                <p class="fw-medium mb-2" id="shipping-name">{{$payt->name}}</p>
                                                                                                <p class="text-muted mb-1" id="shipping-address-line-1">{{$payt->address}}</p>
                                                                                                <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">9865464427</span></p>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <!--end card-body-->
                                                                                </div><!--end col-->
                                                                                
                                                                                <div class="col-lg-12">
                                                                                    <div class="card-body p-4">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                                                                <thead>
                                                                                                    <tr class="table-active">
                                                                                                        <th scope="col" style="width: 50px;">S.no</th>
                                                                                                        <th scope="col">Details</th>
                                                                                                  <th scope="col">Rate</th>
                                                                                                        <th scope="col">Quantity</th>
                                                                                                        <th scope="col" class="text-end">Amount</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody id="products-list">
                                                                                                    <tr>
                                                                                                        <th scope="row">01</th>
                                                                                                        <td class="text-start">
                                                                                                            <span class="fw-medium">Consultation Fee</span>
                                                                                                            <p class="text-muted mb-0">General Physician Consultation</p>
                                                                                                        </td>
                                                                                                        <td>₹500</td>
                                                                                                        <td>01</td>
                                                                                                        <td class="text-end">₹500</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">02</th>
                                                                                                        <td class="text-start">
                                                                                                            <span class="fw-medium">Blood Test</span>
                                                                                                            <p class="text-muted mb-0">Complete Blood Count (CBC)</p>
                                                                                                        </td>
                                                                                                        <td>₹300</td>
                                                                                                        <td>01</td>
                                                                                                        <td class="text-end">₹300</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">03</th>
                                                                                                        <td class="text-start">
                                                                                                            <span class="fw-medium">X-Ray</span>
                                                                                                            <p class="text-muted mb-0">Chest X-Ray</p>
                                                                                                        </td>
                                                                                                        <td>₹700</td>
                                                                                                        <td>01</td>
                                                                                                        <td class="text-end">₹700</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">04</th>
                                                                                                        <td class="text-start">
                                                                                                            <span class="fw-medium">Medication</span>
                                                                                                            <p class="text-muted mb-0">Antibiotics</p>
                                                                                                        </td>
                                                                                                        <td>₹200</td>
                                                                                                        <td>01</td>
                                                                                                        <td class="text-end">₹200</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table><!--end table-->
                                                                                        </div>
                                                                                        <div class="border-top border-top-dashed mt-2">
                                                                                            <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>Sub Total</td>
                                                                                                        <td class="text-end">₹1700</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Estimated Tax (5%)</td>
                                                                                                        <td class="text-end">₹85</td>
                                                                                                    </tr>
                                                                                                    <tr class="border-top border-top-dashed fs-15">
                                                                                                        <th scope="row">Total Amount</th>
                                                                                                        <th class="text-end">₹{{$payt->amount}}</th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <!--end table-->
                                                                                        </div>
                                                                                        <div class="mt-3">
                                                                                            <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                                                                            <p class="text-muted mb-1">Payment Method: <span class="fw-medium" id="payment-method">Credit Card</span></p>
                                                                                            <p class="text-muted mb-1">Card Holder: <span class="fw-medium" id="card-holder-name">{{$payt->name}}</span></p>
                                                                                            <p class="text-muted mb-1">Card Number: <span class="fw-medium" id="card-number">xxxx xxxx xxxx 1234</span></p>
                                                                                            <p class="text-muted">Total Amount: <span class="fw-medium" id="">₹ </span><span id="card-total-amount">{{$payt->amount}}</span></p>
                                                                                        </div>
                                                                                        <div class="mt-4">
                                                                                            <div class="alert alert-info">
                                                                                                <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                                                                                    <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or
                                                                                                        credit card or direct payment online. If account is not paid within 7
                                                                                                        days the credits details supplied as confirmation of work undertaken
                                                                                                        will be charged the agreed quoted fee noted above.
                                                                                                    </span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                                                                            <a href="javascript:window.print()" class="btn btn-success"><i class="ri-download-line align-bottom me-1"></i> Download Invoice</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end card-body-->
                                                                                </div><!--end col-->
                                                                            </div><!--end row-->
                                                                        </div>
                                                                        <!--end card-->
                                                                        @endisset
                                                                                @endforeach
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-5">
                                                                <div class="col-lg-12">
                                                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent border-bottom p-4">
                                                                        <h4 class="mb-sm-0">Recent payments</h4>
                                                                        

                                                                    </div>
                                                                </div>
                                                            <!-- end page title -->
                                                            <div class="row justify-content-center">
                                                                <div class="col-xxl-12">
                                                                    <!-- Striped Rows -->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">s.no</th>
                                                                                    <th scope="col">Id</th>
                                                                                    <th scope="col">invoice no</th>
                                                                                    <th scope="col">Customer</th>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">Amount</th>
                                                                                    <th scope="col">Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($data['payments'] as $pay )
                                                                                <tr>
                                                                                    <th scope="row">{{$loop->iteration}}</th>
                                                                                    <th scope="row">{{$pay->patient_id}}</th>
                                                                                    <th scope="row">{{$pay->invoice}}</th>
                                                                                    <td>{{$pay->name}}</td>
                                                                                    <td>{{$pay->date}}</td>
                                                                                    <td>₹{{$pay->amount}}</td>
                                                                                    <td>
                                                                                        @if($pay->payment == 'Paid')
                                                                                            <span class="badge bg-success">{{$pay->payment}}</span>
                                                                                        @else
                                                                                            <span class="badge bg-danger">{{$pay->payment}}</span>
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                        </div>
                                                           </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end tab-pane-->

                                                 <!-- start insurance Tab panes -->
                                                <div class="tab-pane fade" id="projects" role="tabpanel">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <!-- start page title -->
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                                                            <h4 class="mb-sm-0 text-center">Insurance Application</h4>

                                                                         
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end page title -->


                                                                <div class="row justify-content-center">
                                                                    <div class="col-lg-10">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="text-center">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-lg-9">
                                                                                            <h4 class="mt-4 fw-semibold">KYC Verification</h4>
                                                                                            <p class="text-muted mt-3">Applying for insurance is a crucial step to ensure your financial security. Complete the KYC verification process to proceed with your insurance application.</p>
                                                                                            <div class="mt-4">
                                                                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                                    Click here for Verification
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row justify-content-center mt-5 mb-2">
                                                                                        <div class="col-sm-7 col-8">
                                                                                            <img src="{{asset('assets/images/verification-img.png')}}" alt="" class="img-fluid" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end card-->
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header p-3">
                                                                                <h5 class="modal-title text-uppercase" id="exampleModalLabel">Verify your Account</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <form action="#" class="checkout-tab">
                                                                                <div class="modal-body p-0">
                                                                                    <div class="step-arrow-nav">
                                                                                        <ul class="nav nav-pills nav-justified custom-nav" role="tablist">
                                                                                            <li class="nav-item" role="presentation">
                                                                                                <button class="nav-link p-3 active" id="pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#pills-bill-info" type="button" role="tab" aria-controls="pills-bill-info" aria-selected="true">Personal Info</button>
                                                                                            </li>
                                                                                            <li class="nav-item" role="presentation">
                                                                                                <button class="nav-link p-3" id="pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#pills-bill-address" type="button" role="tab" aria-controls="pills-bill-address" aria-selected="false">Bank Details</button>
                                                                                            </li>
                                                                                            <li class="nav-item" role="presentation">
                                                                                                <button class="nav-link p-3" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="false">Document Verification</button>
                                                                                            </li>
                                                                                            <li class="nav-item" role="presentation">
                                                                                                <button class="nav-link p-3" id="pills-finish-tab" data-bs-toggle="pill" data-bs-target="#pills-finish" type="button" role="tab" aria-controls="pills-finish" aria-selected="false">Verified</button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end modal-body-->
                                                                                <div class="modal-body">
                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane fade show active" id="pills-bill-info" role="tabpanel" aria-labelledby="pills-bill-info-tab">
                                                                                            <div class="row g-3">
                                                                                                <div class="col-lg-6">
                                                                                                    <div>
                                                                                                        <label for="firstName" class="form-label">First Name</label>
                                                                                                        <input type="text" class="form-control" id="firstName" placeholder="Enter your firstname">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div>
                                                                                                        <label for="lastName" class="form-label">Last Name</label>
                                                                                                        <input type="text" class="form-control" id="lastName" placeholder="Enter your lastname">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div>
                                                                                                        <label for="phoneNumber" class="form-label">Phone</label>
                                                                                                        <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div>
                                                                                                        <label for="dateofBirth" class="form-label">Date of Birth</label>
                                                                                                        <input type="text" class="form-control" id="dateofBirth" data-provider="flatpickr" placeholder="Enter your date of birth">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-4">
                                                                                                    <div>
                                                                                                        <label for="emailID" class="form-label">Email ID</label>
                                                                                                        <input type="email" class="form-control" id="emailID" placeholder="Enter your email">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-4">
                                                                                                    <div>
                                                                                                        <label for="password" class="form-label">Password</label>
                                                                                                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-4">
                                                                                                    <div>
                                                                                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                                                                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Enter your confirm password">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div>
                                                                                                        <label for="vatNo" class="form-label">VAT/TIN No.</label>
                                                                                                        <input type="text" class="form-control" id="vatNo" placeholder="Enter your VAT/TIN no">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div>
                                                                                                        <label for="serviceTax" class="form-label">Service Tax No.</label>
                                                                                                        <input type="text" class="form-control" id="serviceTax" placeholder="Enter your service tax no">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-12">
                                                                                                    <div>
                                                                                                        <label for="country-select" class="form-label">Country</label>
                                                                                                        <select class="form-control" data-choices name="country-select" id="country-select">
                                                                                                            <option value="">Select country</option>
                                                                                                            <option value="Argentina">Argentina</option>
                                                                                                            <option value="Belgium">Belgium</option>
                                                                                                            <option value="Brazil">Brazil</option>
                                                                                                            <option value="Colombia">Colombia</option>
                                                                                                            <option value="Denmark">Denmark</option>
                                                                                                            <option value="France">France</option>
                                                                                                            <option value="Germany">Germany</option>
                                                                                                            <option value="Mexico">Mexico</option>
                                                                                                            <option value="Russia">Russia</option>
                                                                                                            <option value="Spain">Spain</option>
                                                                                                            <option value="Syria">Syria</option>
                                                                                                            <option value="United Kingdom">United Kingdom</option>
                                                                                                            <option value="United States of America">United States of America</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="d-flex align-items-start gap-3 mt-3">
                                                                                                        <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-bill-address-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Next Step</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </div>
                                                                                        <!-- end tab pane -->
                                            
                                                                                        <div class="tab-pane fade" id="pills-bill-address" role="tabpanel" aria-labelledby="pills-bill-address-tab">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="banknameInput" class="form-label">Bank Name</label>
                                                                                                        <input type="text" class="form-control" id="banknameInput" placeholder="Enter your bank name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="branchInput" class="form-label">Branch</label>
                                                                                                        <input type="text" class="form-control" id="branchInput" placeholder="Branch">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="accountnameInput" class="form-label">Account Holder Name</label>
                                                                                                        <input type="text" class="form-control" id="accountnameInput" placeholder="Enter account holder name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="accountnumberInput" class="form-label">Account Number</label>
                                                                                                        <input type="number" class="form-control" id="accountnumberInput" placeholder="Enter account number">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="ifscInput" class="form-label">IFSC</label>
                                                                                                        <input type="number" class="form-control" id="ifscInput" placeholder="IFSC">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-lg-12">
                                                                                                    <div class="hstack align-items-start gap-3 mt-4">
                                                                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to Personal Info</button>
                                                                                                        <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next Step</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- end tab pane -->
                                            
                                                                                        <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                                                                                            <h5 class="mb-3">Choose Document Type</h5>
                                            
                                                                                            <div class="d-flex gap-2">
                                                                                                <div>
                                                                                                    <input type="radio" class="btn-check" id="passport" checked name="choose-document">
                                                                                                    <label class="btn btn-outline-info" for="passport">Passport</label>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <input type="radio" class="btn-check" id="aadhar-card" name="choose-document">
                                                                                                    <label class="btn btn-outline-info" for="aadhar-card">Aadhar Card</label>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <input type="radio" class="btn-check" id="pan-card" name="choose-document">
                                                                                                    <label class="btn btn-outline-info" for="pan-card">Pan Card</label>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <input type="radio" class="btn-check" id="other" name="choose-document">
                                                                                                    <label class="btn btn-outline-info" for="other">Other</label>
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                            <div class="dropzone d-flex align-items-center">
                                                                                                <div class="fallback">
                                                                                                    <input name="file" type="file" multiple="multiple">
                                                                                                </div>
                                                                                                <div class="dz-message needsclick text-center">
                                                                                                    <div class="mb-3">
                                                                                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                                                                    </div>
                                            
                                                                                                    <h4>Drop files here or click to upload.</h4>
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                                                                <li class="mt-2" id="dropzone-preview-list">
                                                                                                    <div class="border rounded">
                                                                                                        <div class="d-flex p-2">
                                                                                                            <div class="flex-shrink-0 me-3">
                                                                                                                <div class="avatar-sm bg-light rounded">
                                                                                                                    <img src="#" alt="" data-dz-thumbnail class="img-fluid rounded d-block" />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="flex-grow-1">
                                                                                                                <div class="pt-1">
                                                                                                                    <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                                                                    <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="flex-shrink-0 ms-3">
                                                                                                                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                            <!-- end dropzon-preview -->
                                                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to Bank Details</button>
                                                                                                <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-finish-tab"><i class="ri-save-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- end tab pane -->
                                            
                                                                                        <div class="tab-pane fade" id="pills-finish" role="tabpanel" aria-labelledby="pills-finish-tab">
                                                                                            <div class="row text-center justify-content-center py-4">
                                                                                                <div class="col-lg-11">
                                                                                                    <div class="mb-4">
                                                                                                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                                                    </div>
                                                                                                    <h5>Verification Completed</h5>
                                                                                                    <p class="text-muted mb-4">To stay verified, don't remove the meta tag form your site's home page. To avoid losing verification, you may want to add multiple methods form the <span class="fw-medium">Crypto > KYC Application.</span></p>
                                            
                                                                                                    <div class="hstack justify-content-center gap-2">
                                                                                                        <button type="button" class="btn btn-ghost-success material-shadow-none" data-bs-dismiss="modal">Done <i class="ri-thumb-up-fill align-bottom me-1"></i></button>
                                                                                                        <button type="button" class="btn btn-primary"><i class="ri-home-4-line align-bottom ms-1"></i> Back to Home</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- end tab pane -->
                                                                                    </div>
                                                                                    <!-- end tab content -->
                                                                                </div>
                                                                                <!--end modal-body-->
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end modal-->
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end tab-pane-->

                                                <!--start migration Tab panes-->
                                                <div class="tab-pane fade" id="documents" role="tabpanel">
                                                    <div class="card text-center">
                                                        <div class="card-body p-5">
                                                            <form action="{{route('migration')}}" method="POST">
                                                                @csrf
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="firstNameinput" class="form-label text-uppercase">Patient Id</label>
                                                                            <input type="text" name="patient_id" value="{{$pat->patient_id}}" class="form-control text-center" placeholder="Enter your firstname" readonly>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="firstNameinput" class="form-label text-uppercase">Patient name</label>
                                                                            <input type="text" name="name" value="{{$pat->first_name}} {{$pat->last_name}}" class="form-control text-center" placeholder="Enter your firstname" readonly>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="hospitalSelect" class="form-label text-uppercase text-center">Select Hospital</label>
                                                                            <select class="form-control text-center" name="patient_hospital" id="hospitalSelect" required>
                                                                                <option value="Mediaxis">MediAxis</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="migrationReason" class="form-label text-center text-uppercase">Reason For Migration</label>
                                                                            <select class="form-control text-center" name="patient_reason" id="migrationReason">
                                                                                <option>select..</option>
                                                                                <option value="treatment">Treatment</option>
                                                                                <option value="relocation">Relocation</option>
                                                                                <option value="specialist">Specialist Consultation</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="hospitalSelect" class="form-label text-center">Select Hospital to migration</label>
                                                                            <select class="form-control text-center" name="migration_hospital" id="hospitalSelect">
                                                                                <option>select....</option>
                                                                                <option value="censocare">Censocare</option>
                                                                                <option value="ganga Hospital">ganga Hospital</option>
                                                                                <option value="Appolo Hospital">Appolo Hospital 3</option>
                                                                                <option value="GH erode">GH erode</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-3 text-center">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input text-center" type="checkbox" id="agreeCheckbox" required>
                                                                                <label class="form-check-label text-center" for="agreeCheckbox">
                                                                                    I agree to the terms and conditions
                                                                                </label>
                                                                                <div class="invalid-feedback">
                                                                                    You must agree to the terms and conditions before submitting.
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="text-center">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end tab-pane-->
                                            </div>
                                            <!--end tab-content-->
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                            </div><!-- container-fluid -->
                        </div><!-- End Page-content -->

                      
                  
                   

@endsection
