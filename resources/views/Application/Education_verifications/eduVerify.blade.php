@extends('UxDesignLayout.UxDesign.mainLayout')
@section('title_bar','Apply Now')
    @section('aside')
        @include('UxDesignLayout.UxDesign.aside_appl')
        @endsection
@section('content')
    <div class="content-wrapper">
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

                {{--FIRST ROW OF SECONDARY SCHOOL EDUCTION--}}
                <div class="registerCard">
                    <form>
                        <div class="row justify-content-center">
                            <div class="col-md-8 row">
                                <div class="card col-md-4 ">

                                    <div class="card-body">
                                        <label for="indexNumberInput">School Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="card col-md-4 ">
                                    <div class="card-body">
                                        <label for="indexNumberInput">Graduation Year</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="card col-md-4 ">
                                    <div class="card-body">
                                        <label for="indexNumberInput">District</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="h3 text-center text-cyan">Primary School</div>
                                    <div class="card-body bg-light ">
                                        <button type="submit" class="float-right btn-primary btn-sm btn-block">Save</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                @include("Application.Partials.educationVerify")
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection