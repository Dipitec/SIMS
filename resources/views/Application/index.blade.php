@extends('UxDesignLayout.UxDesignGeneral.mainLayout')
@section('title_bar','Apply Now')
    @section('aside')
        @include('UxDesignLayout.UxDesignGeneral.aside_appl')
        @endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container mr-2 ml-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Follow the Step to Apply <small class="text-secondary">Now</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="{{url('/apply/home/user')}}">Home</a></li>

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
                                <h6 class="card-title">Your necessary Information</h6>

                                <p class="card-text">Please, Be sure to provide your true and relevant basic information here</p>
                                @if($passBasicKey === 1)
                                    <a href="{{route('applicant.basic-info.view')}}" class="btn btn-link">View Them...</a>
                                @else
                                    <a href="{{route('applicant.basic-info')}}" class="btn btn-link">Fill Now...</a>
                                @endif

                                <div class="float-right ">
                                    <div class="text-success">Status</div>


                                        @if($passBasicKey === 1)
                                            <i class="nav-icon far fa-circle text-warning"></i>
                                            <span>Completed</span>
                                        @else
                                            <i class="nav-icon far fa-circle text-danger"></i>
                                            <span>Not Filled</span>
                                        @endif

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
                                @if($passGuardianKey === 1)
                                    <a href="{{route('applicant.nextKin-info.view')}}" class="btn btn-link">View Them...</a>
                                @else
                                    <a href="{{route('applicant.guardian-info')}}" class="btn btn-link">Fill Now...</a>
                                @endif

                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    @if($passGuardianKey === 1)
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <span>Completed</span>
                                    @else
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <span>Not Filled</span>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Step Five</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Payments and Uploads</h6>

                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route("applicant.attachments-payments")}}" class="btn btn-link">Go here...</a>
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
                                @if($passOtherInfoKey === 1)
                                    <a href="{{route('applicant.other-info.view')}}" class="btn btn-link">View Them...</a>
                                @else
                                    <a href="{{route('applicant.other-info.create')}}" class="btn btn-link">Fill Now...</a>
                                @endif

                                <div class="float-right ">
                                    <div class="text-success">Status</div>


                                    @if($passOtherInfoKey === 1)
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <span>Completed</span>
                                    @else
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <span>Not Filled</span>
                                    @endif

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
                                @if($primaryEducationKey === 1)
                                    <a href="{{route("applicant.education-verify")}}" class="btn btn-link">View Now....</a>
                                @else
                                    <a href="{{route("applicant.education-verify")}}" class="btn btn-link">Fill Now....</a>
                                @endif
                                <div class="float-right ">
                                    <div class="text-success">Status</div>
                                    @if($primaryEducationKey === 1)
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <span>Completed</span>
                                    @else
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <span>Not Filled</span>
                                    @endif
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0"> Step Six</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Select Courses</h6>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route("applicant.select-course")}}" class="btn btn-link">Go here...</a>
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