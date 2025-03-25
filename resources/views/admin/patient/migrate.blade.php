@extends('layouts.admin')

@section('section')

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Patient Migration Request</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Patient Migration Request</li>
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
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for company...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card mb-3">
                                            <table class="table align-middle table-nowrap mb-0" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Patient Id</th>
                                                        <th>Patient Name</th>
                                                        <th>Reason</th>
                                                        <th>migrate Id</th>
                                                        <th>migrate Hospital</th>
                                                        <th>hash Key</th>
                                                        <th>Nonce</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    @foreach ($data['patient'] as $mig)
                                                        @isset($mig)
                                                            <tr>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            {{$migg->patient_id}}
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            {{$migg->name}}
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                          {{$migg->y_reason}}
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            #{{$migg->m_id}}
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            {{$migg->m_hospital}}
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            {{ Str::limit($mig->hash, 35) }}..
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            {{$mig->nonce}}
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            <a href="{{ route('transfer.patient', $mig->id) }}" class="btn btn-primary btn-sm">
                                                                                <i class="ri-check-line"></i> ACCEPT
                                                                            </a> |
                                                                        @endif
                                                                    @endforeach
                                                                    @foreach($data['mig'] as $migg)
                                                                        @if ($mig->patient_id == $migg->patient_id)
                                                                            <a href="{{ url('migrate/'.$mig->patient_id) }}" class="btn btn-danger btn-sm">
                                                                                <i class="ri-close-line"></i> REJECT
                                                                            </a>
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                            </tr>
                                                        @endisset
                                                    @endforeach
                                                </tbody>
                                            </table>
                                    

                                  

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