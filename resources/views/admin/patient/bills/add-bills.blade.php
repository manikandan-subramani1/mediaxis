@extends('layouts.admin')

@section('section')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Create Invoice</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                            <li class="breadcrumb-item active">Create Invoice</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-xxl-12">
                <div class="card">
                    @foreach ($data['pat'] as $patient)
                    
                    
                    <form action="{{route('add-payment')}}" method="POST">
                        @csrf
                        <div class="card-body border-bottom border-bottom-dashed p-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="profile-user mx-auto  mb-3">
                                        <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                                        <label for="profile-img-file-input" class="d-block" tabindex="0">
                                            <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 60px; width: 256px;">
                                                <img src="{{asset('assets/images/medi.jpg')}}"class="card-logo card-logo-dark user-profile-image img-fluid" alt="logo dark">
                                                <img src="{{asset('assets/images/logo-light.png')}}" class="card-logo card-logo-light user-profile-image img-fluid" alt="logo light">
                                            </span>
                                        </label>
                                    </div>
                                    <div>
                                        <div>
                                            <label for="companyAddress">Address</label>
                                        </div>
                                 
                                         <h5 class="text-muted mb-1">Mediaxis Pvt Ltd
                                            SF 259, POYAMPALAYAM PIRIVU, P.N.ROAD,
                                            TIRUPUR 641 - 602, TAMIL NADU, INDIA</h5>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4 ms-auto">
                                    <div class="mb-2">
                                        <input type="text" name="b-id" value="{{$patient->patient_id}}" class="form-control bg-light border-0" id="registrationNumber" maxlength="12" placeholder="Legal Registration No" required />
                                        <div class="invalid-feedback">
                                          
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <input type="button" class="form-control  border-0" value="mediaxis@gmail.com" id="companyEmail" placeholder="Email Address"  />
                                        <div class="invalid-feedback">
                                            Please enter a valid email, Ex., example@gamil.com
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <input type="button" class="form-control bg-light border-0" id="companyWebsite" value="www.mediaxis.com" placeholder="Website" required />
                                        <div class="invalid-feedback">
                                            Please enter a website, Ex., www.example.com
                                        </div>
                                    </div>
                                    <div>
                                        <input type="button" class="form-control  border-0" data-plugin="cleave-phone" value="9865464427" id="compnayContactno" placeholder="Contact No" required />
                                        <div class="invalid-feedback">
                                            Please enter a contact number
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                               
                                <!--end col-->
                                <div class="col-lg-3 col-sm-6">
                                    <div>
                                        <label for="date-field">Date</label>
                                        <input type="date"name="b-date" class="form-control bg-light border-0" id="date-field" data-provider="flatpickr" data-time="true" placeholder="Select Date-time">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-sm-6">
                                    <label for="choices-payment-status">Payment Status</label>
                                    <div class="input-light">
                                        <select class="form-control  bg-light border-0" name="b-status" data-choices data-choices-search-false id="choices-payment-status" required>
                                            <option value="">Select Payment Status</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Unpaid">Unpaid</option>
                                            <option value="Refund">Refund</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-sm-6">
                                    <div>
                                        <label for="totalamountInput">Total Amount</label>
                                        <input type="text"name="b-amount" class="form-control bg-light border-0" id="totalamountInput" placeholder="$0.00"  />
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="card-body p-4 border-top border-top-dashed">
                            <div class="row">
                            
                                <div class="col-sm-8 ms-auto">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>
                                                <label for="shippingName" class="text-muted text-uppercase fw-semibold">Shipping Address</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" name="b-name" value="{{$patient->first_name}} {{$patient->last_name}}" class="form-control bg-light border-0" id="shippingName" placeholder="Full Name" readonly />
                                                <div class="invalid-feedback">
                                                    Please enter a full name
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" name="b-address"class="form-control bg-light border-0"  value="{{$patient->address_1}}, {{$patient->city}},{{$patient->state}}, {{$patient->zip}}" data-plugin="cleave-phone" id="shippingPhoneno" placeholder="(123)456-7890" readonly />
                                                <div class="invalid-feedback">
                                                    Please enter a phone number
                                                </div>
                                            </div>
                                          
                                            <div>
                                                <input type="text" value="{{$patient->mobile_1}}" class="form-control bg-light border-0" id="shippingTaxno" placeholder="Tax Number" required />
                                                <div class="invalid-feedback">
                                                    Please enter a tax number
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="card-body p-4">
                         
                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                <input type="submit" class="btn btn-success">
                                </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection
