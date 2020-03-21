@extends('UxDesignLayout.UxDesign.mainLayout')
@section('title_bar','Apply Now')
    @section('aside')
        @include('UxDesignLayout.UxDesign.aside_appl')
        @endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       @include('Application.Partials.upside')
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                {{-- +++++++++++++++++++++++++++++++++++++ BASIC INFO FORM ++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
                @include("Application.Partials.basicInfoForm")
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection
