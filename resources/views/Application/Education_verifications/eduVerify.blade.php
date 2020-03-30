@extends('UxDesignLayout.UxDesignGeneral.mainLayout')
@section('title_bar','Apply Now')
    @section('aside')
        @include('UxDesignLayout.UxDesignGeneral.aside_appl')
        @endsection
@section('content')
    <div class="content-wrapper">
    @include("Application.Partials.alertResponses")
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Education Verification<small> User name</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#">Basic Information</a></li>
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

                {{--FIRST ROW OF PRIMARY SCHOOL EDUCTION--}}
                <div class="registerCard">
                    @if($primaryEducationKey === 1)
                        @include('Application.Education_verifications.view_details')

                    @else
                        <form method="POST" action="{{route("applicant.education-primary-create")}}">
                            @include("Application.Partials.primary_education_form")
                        </form>
                    @endif

                </div>
                @include("Application.Partials.educationVerify")
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection