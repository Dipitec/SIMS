@extends('UxDesignLayout.UxDesign.mainLayout')
@section('title_bar','Apply Now')
    @section('aside')
        @include('UxDesignLayout.UxDesign.aside_appl')
        @endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container mr-2 ml-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Follow the Step to Apply <small class="text-secondary">Application Type</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="#">Home</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <hr />
        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row applicant-user-cards">
                    <div class="col-lg-6 ">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Step One</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Select Your Course</h6>

                                <p class="card-text">Please, Be sure to provide your true and relevant basic information here</p>
                                <a href="{{route('applicant.basic-info')}}" class="btn btn-link">Go here...</a>
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    <i class="nav-icon far fa-circle text-warning"></i>
                                    <span>Completed</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Step Three </h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Your Relative | Guardian </h6>

                                <p class="card-text">Provide your Relative information for any Emergency</p>
                                <a href="{{route('applicant.guardian-info')}}" class="btn btn-link">Go here...</a>
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <span>Not Filled</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Step Five</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Select Courses</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route("applicant.select-course")}}" class="btn btn-link">Go here...</a>
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <span>Not Filled</span>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0"> Step Seven</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Payments and Uploads</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route("applicant.attachments-payments")}}" class="btn btn-link">Go here...</a>
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    <i class="nav-icon far fa-circle text-warning"></i>
                                    <span>Completed</span>
                                </div>
                            </div>
                        </div>
                        {{--/. end of col md --}}
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0"> Step Two</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Other necessary Details </h6>

                                <p class="card-text">Additional details for more preferred choices</p>
                                <a href="{{route('applicant.other-info')}}" class="btn btn-link">Go here...</a>
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <span>Not Filled</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0"> Step Four</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Verify You Education Levels</h6>

                                <p class="card-text">Verify from a Respective Education Authority NECTA|NACTE</p>
                                <a href="{{route("applicant.education-verify")}}" class="btn btn-link">Go here...</a>
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <span>Not Filled</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0"> Step Six</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Approved Status</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-link">Go here...</a>
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    <i class="nav-icon far fa-circle text-warning"></i>
                                    <span>Completed</span>
                                </div>
                            </div>
                        </div>


                        </div>


                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection