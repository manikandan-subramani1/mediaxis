@extends('layouts.admin2')

@section('section')


                  
                    <!-- ============================================================== -->
                    <!-- Start right Content here -->
                    <!-- ============================================================== -->
                    @foreach ($data['pat'] as $pat )
                    @isset($data)

                   
                    
                   
                        <div class="page-content" style="margin-top: 24px !important;">
                            <div class="container">
                                <div class="profile-foreground position-relative mx-n4 mt-n4">
                                    <div class="profile-wid-bg">
                                        <img src="{{asset('assets/images/galaxy/img-1.png')}}" alt="" class="profile-wid-img" />
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
                                                                    <div class="progress animated-progress custom-progress progress-label">
                                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                                            style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                            <div class="label">100%</div>
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
                                                                                    <th class="ps-0" scope="row">Migration On:</th>
                                                                                    <td class="text-muted">{{$pat->updated_at}}</td>
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
                                                                    <div class="row">
                                                                        <div class="col-lg-12 mt-4 text-center">
                                                                            <div>
                                                                                <h2 class="text-center text-black">Treatment History</h2>
                                                                                <div class="timeline">
                                                                                    @foreach ($data['treatment'] as $treat)
                                                                                        <div class="timeline-item right">
                                                                                            <i class="icon ri-stack-line"></i>
                                                                                            <div class="date">{{$treat->date}}</div>
                                                                                            <div class="content">
                                                                                                <div class="d-flex flex-column flex-md-row">
                                                                                                    <div class="flex-shrink-0">
                                                                                                        <img src="{{asset('./uploads/Profiles/'.$pat->image)}}" alt="" class="avatar-sm rounded material-shadow-none">
                                                                                                    </div>
                                                                                                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                                                                                        <h5 class="fs-15">{{$treat->name}}
                                                                                                            <small class="text-muted fs-13 fw-normal">- {{$treat->patient_id}}</small><br>
                                                                                                            <small class="text-muted fs-13 fw-normal">-for {{$treat->treatment}}</small>
                                                                                                        </h5>
                                                                                                        <p class="text-muted mb-2">{{$treat->msg}}</p>
                                                                                                        <h5><small class="btn btn-sm btn-light">-by {{$treat->doctor}}</small></h5>
                                                                                                        <div class="hstack gap-2 flex-wrap">
                                                                                                            <a class="btn btn-sm btn-light"><span class="me-1">📅</span> {{$treat->date}}</a>
                                                                                                            <a class="btn btn-sm btn-light"><span class="me-1">⌚</span>{{$treat->time}}</a>
                                                                                                            <a class="btn btn-sm btn-light"><span class="me-1">💸</span>₹{{$treat->amount}}</a>
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
                                                                                        <div class="d-flex">
                                                                                            <div class="flex-grow-1">
                                                                                                <img src="{{asset('assets/images/med.png')}}" class=" card-logo-dark" alt="logo dark" height="200">
                                                                                                <img src="{{asset('assets/images/med.png')}}" class="card-logo card-logo-light" alt="logo light" height="300">
                                                                                               
                                                                                            </div>
                                                                                            <div class="flex-shrink-0 mt-sm-0 mt-6">
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
                                                                                            <div class="col-6">
                                                                                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                                                                                <p class="fw-medium mb-2" id="billing-name">MEDIAXIS</p>
                                                                                                <p class="text-muted mb-1" id="billing-address-line-1">123, Anna Salai, Chennai, Tamil Nadu</p>
                                                                                                <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">044-12345678</span></p>
                                                                                                <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">33AABCU9603R1Z2</span> </p>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-6">
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
                                                                                <hr>
                                                                               
                                                                            </tbody>
                                                                        </table>
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

                                              
                                            </div>
                                            <!--end tab-content-->
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                            </div><!-- container-fluid -->
                        </div><!-- End Page-content -->

                        
                    </div><!-- end main content-->
                  
                   

@endsection

