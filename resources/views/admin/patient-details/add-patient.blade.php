@extends('layouts.admin')

@section('section')

    <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a accesskey="n" href="{{ route('patient_details') }}" class="btn btn-primary">Back</a>
                                        <div class="text-center pt-3 pb- mb-2">
                                            <h2>Add patient details</h2>

                                        </div>

                               
                                        <div class="tab-content">

                                            <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel"
                                                aria-labelledby="pills-gen-info-tab">
                                                <div>
                                                    <div class="mb-4">
                                                        <div>
                                                            <h5 class="mt-2 mb-3 text-center">Treatment history</h5>

                                                        </div>
                                                    </div>
                                                @foreach ($data['pat'] as $pat )
                                                
                                           
                                                    <form action="{{route('add-treatment')}}" method="post">
                                                        @csrf
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="nameInput" class="form-label">Patient ID</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input type="text" name="pat-id" class=" btn btn-success" value="{{$pat->patient_id}}" id="nameInput"readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="nameInput" class="form-label">Patient Name</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input type="text" name="pat-name" class="form-control" value="{{$pat->first_name}} {{$pat->last_name}}" id="nameInput" placeholder="Enter your name" readonly>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="contactNumber" class="form-label">Contact Number</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input type="number" name="pat-mobile" value="{{$pat->mobile_1}}" class="form-control" id="contactNumber" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="dateInput" class="form-label">Date</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input type="date" name="pat-date" class="form-control" id="dateInput">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="timeInput" class="form-label">Time</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input type="time"  name="pat-time" class="form-control" id="timeInput">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="leaveemails" class="form-label">Treatment For</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                
                                                                <select id="ForminputState" name="pat-treatment" class="form-select">
                                                                    <option selected>Choose...</option>
                                                                    <option>Cardialogy</option>
                                                                    <option>Neurology</option>
                                                                    <option>Orthopedic</option>
                                                                    <option>General</option>
                                                                    <option>ENT</option>
                                                                    <option>Opthalmology</option>
                                                                    <option>Dental</option>
                                                                    <option>Urology</option>
                                                                    <option>Gynecology</option>
                                                                    <option>Psychiatry</option>
                                                                    <option>Physiotherapy</option>
                                                                    <option>Homeopathy</option>
                                                                    <option>Ayurveda</option>
                                                                    <option>Unani</option>
                                                                    <option>Naturopathy</option>
                                                                    <option>Yoga</option>
                                                                    <option>Acupuncture</option>
                                                                    <option>Accupressure</option>


                                                                </select></div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="leaveemails" class="form-label">Doctor</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                
                                                                <select id="ForminputState" name="pat-doctor" class="form-select">
                                                                    <option selected>Choose...</option>
                                                                    <option>Dr. A</option>
                                                                    <option>Dr. B</option>
                                                                    <option>Dr. C</option>
                                                                    <option>Dr. D</option>
                                                                    <option>Dr. E</option>
                                                                    <option>Dr. F</option>
                                                                    <option>Dr. G</option>
                                                                    <option>Dr. H</option>
                                                                    <option>Dr. I</option>
                                                                    <option>Dr. J</option>
                                                                    <option>Dr. K</option>
                                                                    <option>Dr. L</option>
                                                                    <option>Dr. M</option>
                                                                    <option>Dr. N</option>
                                                                    <option>Dr. O</option>
                                                                    <option>Dr. P</option>
                                                                    <option>Dr. Q</option>
                                                                    <option>Dr. R</option>
                                                                    <option>Dr. S</option>
                                                                    <option>Dr. T</option>
                                                                    <option>Dr. U</option>
                                                                    <option>Dr. V</option>
                                                                    <option>Dr. W</option>
                                                                    <option>Dr. X</option>
                                                                    <option>Dr. Y</option>
                                                                    <option>Dr. Z</option>
                                                                </select></div>
                                                        </div>

                                                       
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="meassageInput" class="form-label">More Details</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" name="pat-msg" id="meassageInput" rows="3" placeholder="Enter your message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-3">
                                                                <label for="nameInput" class="form-label">Amount</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input type="text" name="pat-amount" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="text-end">

                                                            <input type="submit" class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                    @endforeach
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


@endsection