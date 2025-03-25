@extends('layouts.login-web')

@section('content')


    <div class="auth-page-wrapper">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center  text-white-50">
                            <div>
                                <a href="#" class="d-inline-block ">
                                    <img src="{{asset('assets/images/med.png')}}" alt="" height="400">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="page-content1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="text-center pt-3 pb- mb-2">
                                            <h2>Signup Your Account</h2>

                                        </div>

                                        <div id="custom-progress-bar" class="progress-nav mb-4">


                                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill active"
                                                        data-progressbar="custom-progress-bar" id="pills-gen-info-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-gen-info" type="button"
                                                        role="tab" aria-controls="pills-gen-info"
                                                        aria-selected="true"></button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill "
                                                        data-progressbar="custom-progress-bar" id="pills-info-desc-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-info-desc"
                                                        type="button" role="tab" aria-controls="pills-info-desc"
                                                        aria-selected="false"></button>
                                                </li>

                                            </ul>
                                        </div>


                                        <div class="tab-content">

                                            <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel"
                                                aria-labelledby="pills-gen-info-tab">
                                                <div>
                                                    <div class="mb-4">
                                                        <div>
                                                            <h5 class="mt-2 mb-3 text-center">Fill all Information as below
                                                                To creating a Digital Account</h5>

                                                        </div>
                                                    </div>
                                                
                                                        <form action="{{ route('patient-register') }}" method="POST" enctype="multipart/form-data"  data-nexttab="pills-info-desc-tab">
                                                            @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <!-- File Input Sizing Large -->
                                                                    <div>
                                                                        <div class="text-center">
                                                                            <div
                                                                                class="profile-user position-relative d-inline-block mx-auto mb-2">
                                                                                <img id="profile-image-preview" src="{{asset('assets/images/user-dummy-img.jpg')}}"
                                                                                    class="rounded-circle avatar-lg img-thumbnail1 user-profile-image"
                                                                                    alt="user-profile-image">
                                                                                <div
                                                                                    class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                                                    <input id="profile-img-file-input" name="profile"
                                                                                        type="file"
                                                                                        class="profile-img-file-input"
                                                                                        onchange="document.getElementById('profile-image-preview').src = window.URL.createObjectURL(this.files[0])">   
                                                                                    <label for="profile-img-file-input"
                                                                                        class="profile-photo-edit avatar-xs">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-light text-body">
                                                                                            <i class="ri-camera-fill"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="fs-14">Add Your Image</h5>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="firstNameinput" class="form-label">First
                                                                        Name</label>
                                                                    <input type="text" required class="form-control"
                                                                        placeholder="Enter your firstname"
                                                                        id="firstNameinput" name="first_name">
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="lastNameinput" class="form-label">Last
                                                                        Name</label>
                                                                    <input type="text" required class="form-control"
                                                                        placeholder="Enter your lastname"
                                                                        id="lastNameinput" name="last_name">
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="lastNameinput" class="form-label">
                                                                        DOB</label>
                                                                    <input type="date" required class="form-control"
                                                                        placeholder="Enter your lastname"
                                                                        id="lastNameinput" name="dob">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-4">
                                                                <div class="mt-">
                                                                    <label class="form-label">Mobile Number-1</label>
                                                                    <div class="input-group" data-input-flag
                                                                        data-option-countrycode="false">
                                                                        <button class="btn btn-light border" type="button"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><img
                                                                                src="{{asset('assets/images/flags/in.svg')}}"
                                                                                alt="flag img" height="20"
                                                                                class="country-flagimg rounded"><span
                                                                                class="ms-2 country-codeno">+
                                                                                1</span></button>
                                                                        <input type="number"  name="mobile-1"
                                                                            class="form-control rounded-end flag-input"
                                                                            value="" placeholder="Enter number"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />

                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mt-">
                                                                    <label class="form-label">Mobile Number-2</label>
                                                                    <div class="input-group" data-input-flag
                                                                        data-option-countrycode="false">
                                                                        <button class="btn btn-light border" type="button"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><img
                                                                                src="{{asset('assets/images/flags/in.svg')}}"
                                                                                alt="flag img" height="20"
                                                                                class="country-flagimg rounded"><span
                                                                                class="ms-2 country-codeno">+
                                                                                1</span></button>
                                                                        <input type="number"  name="mobile-2"
                                                                            class="form-control rounded-end flag-input"
                                                                            value="" placeholder="Enter number"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />

                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="emailidInput" class="form-label">Email
                                                                        Address</label>
                                                                    <input type="email" name="email" required class="form-control"
                                                                        placeholder="example@gamil.com" id="emailidInput">
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState" class="form-label">Blood
                                                                        Group</label>
                                                                    <select id="ForminputState" name="blood" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>A+ve</option>
                                                                        <option>A1+ve</option>
                                                                        <option>A1B+ve</option>
                                                                        <option>A1B-ve</option>
                                                                        <option>A2+ve</option>
                                                                        <option>A2-ve</option>
                                                                        <option>A2B+ve</option>
                                                                        <option>A2B-ve</option>
                                                                        <option>AB+ve</option>
                                                                        <option>AB-ve</option>
                                                                        <option>B+ve</option>
                                                                        <option>B-ve</option>
                                                                        <option>O+ve</option>
                                                                        <option>O-ve</option>
                                                                        <option>N/A</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState"
                                                                        class="form-label">Gender</label>
                                                                    <select id="ForminputState" name="gender" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                        <option>Others</option>

                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState" class="form-label">Marital
                                                                        Status</label>
                                                                    <select id="ForminputState" name="marital" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>Single</option>
                                                                        <option>Married</option>
                                                                        <option>Divorced</option>
                                                                        <option>Legally Separated</option>
                                                                        <option>Widowed</option>
                                                                        <option>In a Relationship</option>
                                                                        <option>Engaged</option>
                                                                        <option>Domestic Partnership</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="compnayNameinput"
                                                                        class="form-label">Address-1</label>
                                                                    <input type="text" name="address-1" required class="form-control"
                                                                        placeholder="Please fill your Address-1"
                                                                        id="compnayNameinput">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState"
                                                                        class="form-label">city</label>
                                                                    <select id="ForminputState" name="city" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>namakkal</option>
                                                                        <option>chennai</option>
                                                                        <option>coimbatore</option>
                                                                        <option>trichy</option>
                                                                        <option>madurai</option>
                                                                        <option>salem</option>
                                                                        <option>erode</option>
                                                                        <option>vellore</option>
                                                                        <option>tirunelveli</option>
                                                                        <option>thoothukudi</option>
                                                                        <option>nagercoil</option>
                                                                        <option>thanjavur</option>
                                                                        <option>dindigul</option>
                                                                        <option>karur</option>
                                                                        <option>kanyakumari</option>
                                                                        <option>tiruppur</option>
                                                                        <option>theni</option>
                                                                        <option>virudhunagar</option>
                                                                        <option>ramanathapuram</option>
                                                                        <option>krishnagiri</option>
                                                                        <option>nagapattinam</option>
                                                                        <option>perambalur</option>
                                                                        <option>pudukkottai</option>
                                                                        <option>ariyalur</option>
                                                                        <option>cuddalore</option>
                                                                        <option>dharmapuri</option>
                                                                        <option>kallakurichi</option>
                                                                        <option>kanchipuram</option>
                                                                        <option>nilgiris</option>
                                                                        <option>ranipet</option>
                                                                        <option>tiruvarur</option>
                                                                        <option>tirupattur</option>
                                                                        <option>tiruvallur</option>
                                                                        <option>tiruvannamalai</option>
                                                                        <option>villupuram</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState"
                                                                        class="form-label">State</label>
                                                                    <select id="ForminputState" name="state" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>Tamilnadu</option>
                                                                        <option>Andhra Pradesh</option>
                                                                        <option>Arunachal Pradesh</option>
                                                                        <option>Assam</option>
                                                                        <option>Bihar</option>
                                                                        <option>Chhattisgarh</option>
                                                                        <option>Goa</option>
                                                                        <option>Gujarat</option>
                                                                        <option>Haryana</option>
                                                                        <option>Himachal Pradesh</option>
                                                                        <option>Jharkhand</option>
                                                                        <option>Karnataka</option>
                                                                        <option>Kerala</option>
                                                                        <option>Madhya Pradesh</option>
                                                                        <option>Maharashtra</option>
                                                                        <option>Manipur</option>
                                                                        <option>Meghalaya</option>
                                                                        <option>Mizoram</option>
                                                                        <option>Nagaland</option>
                                                                        <option>Odisha</option>
                                                                        <option>Punjab</option>
                                                                        <option>Rajasthan</option>
                                                                        <option>Sikkim</option>
                                                                        <option>Telangana</option>
                                                                        <option>Tripura</option>
                                                                        <option>Uttar Pradesh</option>
                                                                        <option>Uttarakhand</option>
                                                                        <option>West Bengal</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState" class="form-label">Pin
                                                                        code</label>
                                                                    <input type="text" name="zip" required class="form-control"
                                                                        id="compnayNameinput">
                                                                </div>
                                                            </div><!--end col-->
                                                            <hr>
                                                            <hr>

                                                            <div class="col-12">
                                                                <h5 class="text-center mb-3">In Case of Emergency, provide another person's details</h5>
                                                                
                                                            </div>
                                                           
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="firstNameinput" class="form-label">guardian
                                                                        name</label>
                                                                    <input type="text" name="g-name" required class="form-control"
                                                                        placeholder="Enter the guardian name"
                                                                        id="firstNameinput">
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-6">
                                                                <div class="mt-">
                                                                    <label class="form-label">Mobile Number</label>
                                                                    <div class="input-group" data-input-flag
                                                                        data-option-countrycode="false">
                                                                        <button class="btn btn-light border" type="button"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><img
                                                                                src="{{asset('assets/images/flags/in.svg')}}"
                                                                                alt="flag img" height="20"
                                                                                class="country-flagimg rounded"><span
                                                                                class="ms-2 country-codeno">+
                                                                                1</span></button>
                                                                        <input type="number"  name="g-mobile"
                                                                            class="form-control rounded-end flag-input"
                                                                            value="" placeholder="Enter guardian number"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />

                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="compnayNameinput"
                                                                        class="form-label">Address</label>
                                                                    <input type="text"  name="g-address" required class="form-control"
                                                                        placeholder="Please fill your guardian Address"
                                                                        id="compnayNameinput">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState"
                                                                        class="form-label">Select Relations</label>
                                                                    <select id="ForminputState"  name="g-relation" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>Father</option>
                                                                        <option>Mother</option>
                                                                        <option>Sister</option>
                                                                        <option>Brother</option>
                                                                        <option>Wife</option>
                                                                        <option>Husband</option>
                                                                        <option>Son</option>
                                                                        <option>Daughter</option>
                                                                        <option>Uncle</option>
                                                                        <option>Aunt</option>
                                                                        <option>Nephew</option>
                                                                        <option>Niece</option>
                                                                        <option>Grandfather</option>
                                                                        <option>Grandmother</option>
                                                                        <option>Grandson</option>
                                                                        <option>Granddaughter</option>
                                                                        <option>Others</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                          
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState"
                                                                        class="form-label">City</label>
                                                                    <select id="ForminputState"  name="g-city" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>namakkal</option>
                                                                        <option>chennai</option>
                                                                        <option>coimbatore</option>
                                                                        <option>trichy</option>
                                                                        <option>madurai</option>
                                                                        <option>salem</option>
                                                                        <option>erode</option>
                                                                        <option>vellore</option>
                                                                        <option>tirunelveli</option>
                                                                        <option>thoothukudi</option>
                                                                        <option>nagercoil</option>
                                                                        <option>thanjavur</option>
                                                                        <option>dindigul</option>
                                                                        <option>karur</option>
                                                                        <option>kanyakumari</option>
                                                                        <option>tiruppur</option>
                                                                        <option>theni</option>
                                                                        <option>virudhunagar</option>
                                                                        <option>ramanathapuram</option>
                                                                        <option>krishnagiri</option>
                                                                        <option>nagapattinam</option>
                                                                        <option>perambalur</option>
                                                                        <option>pudukkottai</option>
                                                                        <option>ariyalur</option>
                                                                        <option>cuddalore</option>
                                                                        <option>dharmapuri</option>
                                                                        <option>kallakurichi</option>
                                                                        <option>kanchipuram</option>
                                                                        <option>nilgiris</option>
                                                                        <option>ranipet</option>
                                                                        <option>tiruvarur</option>
                                                                        <option>tirupattur</option>
                                                                        <option>tiruvallur</option>
                                                                        <option>tiruvannamalai</option>
                                                                        <option>villupuram</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState"
                                                                        class="form-label">State</label>
                                                                    <select id="ForminputState"  name="g-state" class="form-select">
                                                                        <option selected>Choose...</option>
                                                                        <option>Tamilnadu</option>
                                                                        <option>Andhra Pradesh</option>
                                                                        <option>Arunachal Pradesh</option>
                                                                        <option>Assam</option>
                                                                        <option>Bihar</option>
                                                                        <option>Chhattisgarh</option>
                                                                        <option>Goa</option>
                                                                        <option>Gujarat</option>
                                                                        <option>Haryana</option>
                                                                        <option>Himachal Pradesh</option>
                                                                        <option>Jharkhand</option>
                                                                        <option>Karnataka</option>
                                                                        <option>Kerala</option>
                                                                        <option>Madhya Pradesh</option>
                                                                        <option>Maharashtra</option>
                                                                        <option>Manipur</option>
                                                                        <option>Meghalaya</option>
                                                                        <option>Mizoram</option>
                                                                        <option>Nagaland</option>
                                                                        <option>Odisha</option>
                                                                        <option>Punjab</option>
                                                                        <option>Rajasthan</option>
                                                                        <option>Sikkim</option>
                                                                        <option>Telangana</option>
                                                                        <option>Tripura</option>
                                                                        <option>Uttar Pradesh</option>
                                                                        <option>Uttarakhand</option>
                                                                        <option>West Bengal</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-6">
                                                                <div class="mb-3">
                                                                    <label for="ForminputState" class="form-label">Pin
                                                                        code</label>
                                                                    <input type="text"  name="g-zip"required class="form-control"
                                                                        id="compnayNameinput">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                    data-nexttab="pills-info-desc-tab"><i
                                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Enter
                                                                    To Create  ID</button>
                                                            </div>
                                                        </div><!--end row-->

                                                </div>

                                            </div>
                                            <!-- end tab pane -->
                        
                                           
                                        </div>
                                        <!-- end tab content -->
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div><!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Created by Manikandan Subramani <i
                                    class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>

@endsection