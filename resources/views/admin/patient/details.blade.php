@extends('layouts.admin')

@section('section')

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Patient details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Patients Details</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="flex-grow-1">
                                            <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Add Patients</button>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="hstack text-nowrap gap-2">
                                                <button class="btn btn-soft-danger material-shadow-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-12">
                            <div class="card" id="companyList">
                                <div class="card-header">
                                    <div class="row g-2">
                                        <div class="col-md-3">
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card mb-3">
                                            <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                <thead class="table-light">
                                                    <tr class="text-center">
                                                        
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th>S.no</th>
                                                        <th>Patient ID</th>
                                                        <th>Patient Name</th>
                                                        <th>DOB</th>
                                                        <th>Mobile</th>
                                                        <th>Blood</th>
                                                        <th>Location</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        @foreach ($data['ord'] as $pat)
                                                        
                                                      
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                                        <td class="id">{{$loop->iteration}}</td>
                                                        <td class="owner">{{$pat->patient_id}}</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./uploads/Profiles/{{$pat->image}}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2 name">{{$pat->first_name}} {{$pat->last_name}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="owner">{{$pat->dob}}</td>
                                                        <td class="industry_type">{{$pat->mobile_1}}</td>
                                                        <td><span class="star_value">{{$pat->blood}}</span> <i class="ri-star-fill text-warning align-bottom"></i></td>
                                                        <td class="location">{{$pat->city}},{{$pat->state}},{{$pat->zip}}</td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                               
                                                               <a href="{{url('add-details',$pat->patient_id)}}" class= " btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ri-pencil-line"></i> add Treatment</a>
                                                                <a href="{{route('delete-patient',$pat->id)}}" class=" btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deleteRecord({{$pat->id}})"><i class="ri-delete-bin-2-line"></i></a>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ companies We did not find any companies for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0">
                                                <div class="modal-header bg-info-subtle p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                              
                                                   
                                            
                                                            <div class="page-content1">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                            
                                                                                    <div class="text-center pt-3 pb- mb-2">
                                                                                        <h2>Register Account</h2>
                                            
                                                                                    </div>
                                            
                                                                                   
                                            
                                                                                            
                                                                                                    <form action="{{ route('patient-register-admin') }}" method="POST" enctype="multipart/form-data"  data-nexttab="pills-info-desc-tab">
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
                                                                                                                            src="assets/images/flags/in.svg"
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
                                                                                                                            src="assets/images/flags/in.svg"
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
                                                                                                                    <option>Legally Seperated</option>
                                                                                                                    <option>Windowed</option>
                                            
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
                                            
                                                                                                        <h5 class="text-center mb-3">In Case of Emergency, provide another person's details</h5>
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
                                                                                                                            src="assets/images/flags/in.svg"
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
                                                                                                                    <option>sister</option>
                                                                                                                    <option>brother</option>
                                                                                                                    <option>wife</option>
                                                                                                                    <option>husband</option>
                                                                                                                    <option>son</option>
                                                                                                                    <option>daughter</option>
                                                                                                                    <option>others</option>
                                                                                                                    
                                            
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
                                                                                                                To Create Login ID</button>
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
                                            
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end add modal-->

                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                </div>
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4 class="fs-semibold">You are about to delete a company ?</h4>
                                                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your company will remove all of your information from our database.</p>
                                                        <div class="hstack gap-2 justify-content-center remove">
                                                            <button class="btn btn-link link-success fw-medium text-decoration-none material-shadow-none" data-bs-dismiss="modal">
                                                                <i class="ri-close-line me-1 align-middle"></i> Close
                                                            </button>
                                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end delete modal -->

                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


@endsection