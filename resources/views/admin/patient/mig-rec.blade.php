@extends('layouts.admin')

@section('section')

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Migrated Patients Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Migrated Patients Details</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    
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
                                                        
                                                        
                                                        <th>S.no</th>
                                                        <th>Patient ID</th>
                                                        <th>Patient Name</th>
                                                        
                                                        <th>Mobile</th>
                                                        <th>date</th>
                                                       
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    @foreach ($data['mr'] as $pat)
                                                    <tr class="text-center">
                                                       
                                                        
                                                      
                                                      
                                                        <td class="id">{{$loop->iteration}}</td>
                                                        <td class="owner">{{$pat->patient_id}}</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                               
                                                                <div class="flex-grow-1 ms-2 name">{{$pat->name}} 
                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <td class="industry_type">{{$pat->mobile}}</td>
                                                        <td class="industry_type">{{$pat->date}}</td>
                                                        <td class="industry_type">
                                                            @if($pat->status == 'migrated')
                                                                <span class="badge bg-success">migrated</span>
                                                            @else
                                                                <span class="badge bg-danger">Inactive</span>
                                                            @endif
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