@extends('UxDesignLayout.UxDesignGeneral.mainLayout')
@section('title_bar','Apply Now')
    @section('aside')
        @include('UxDesignLayout.UxDesignGeneral.aside_appl')
        @endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include("Application.Partials.alertResponses")
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Close ralatives For<small> User name</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#">Other Info</a></li>
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
                {{-- +++++++++++++++++++++++++++++++++ GUARDIAN FORM+++++++++++++++++++++++++++++++++++++++++++++++++++ --}}

            @include("Application.Partials.guardianForm")
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection