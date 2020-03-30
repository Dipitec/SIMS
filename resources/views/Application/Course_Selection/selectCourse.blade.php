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
                        <h1 class="m-0 text-dark">Select Your Courses<small> User name</small></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#">Course Selection</a></li>
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
                <div class="registerCard m-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center h3 text-cyan">Select Five courses to Apply</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            {{--GENERAL KIND  OF COURSES TO APPLY--}}

                            <div class="row justify-content-center card-body">
                                <div class="form-group col-md-10">
                                    <label  id="relative">Course Level</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" value="T/Certificate">
                                        <label class="form-check-label">Technical Certificate</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" value="O/diploma">
                                        <label class="form-check-label">Ordinary Diploma</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" value="B/Degree" checked>
                                        <label class="form-check-label">Bachelor Degree</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form role="form" id="quickForm" method="POST" action="{{route('applicant.select-course.create')}}">
                                @csrf
                                <div class="card-body">
                                    {{-- SECTION FIRST --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {{--CHOICES OF COURSES TO APPLY--}}
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-10">
                                                    <label  id="relative">Your First Choice</label>
                                                    <select class="form-control custom-select  " name="relative">
                                                        @foreach($coursesData as $coursesDatum)
                                                            <option value="{{$coursesDatum->course_name}}">{{$coursesDatum->course_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-10">
                                                    <label  id="relative">Your Second Choice</label>
                                                    <select class="form-control  custom-select" name="relative">
                                                        @foreach($coursesData as $coursesDatum)
                                                            <option value="{{$coursesDatum->course_name}}">{{$coursesDatum->course_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-10">
                                                    <label  id="relative">Your Third Choice</label>
                                                    <select class="form-control  custom-select" name="relative">
                                                        @foreach($coursesData as $coursesDatum)
                                                            <option value="{{$coursesDatum->course_name}}">{{$coursesDatum->course_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-10">
                                                    <label  id="relative">Your Forth Choice</label>
                                                    <select class="form-control  custom-select " name="relative">
                                                        @foreach($coursesData as $coursesDatum)
                                                            <option value="{{$coursesDatum->course_name}}">{{$coursesDatum->course_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection