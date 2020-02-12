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
                <div class="registerCard m-2">
                    <form role="form" id="quickForm" method="POST" action="{{route('auth.register')}}">
                        @csrf
                        <div class="card-body">
                            {{-- User Names --}}
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="first_name"  class="ml-2">Your Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="" value="{{old('first_name')}}">
                                </div>
                                <div class="form-group  col-lg-4">
                                    <label for="middle_name"  class="ml-2">Sur Name</label>
                                    <input type="text" name="middle_name" class="form-control" id="middle_name" placeholder="" value="{{old('middle_name')}}">
                                </div>
                                <div class="form-group  col-lg-4">
                                    <label for="last_name"  class="ml-2">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="" value="{{old('last_name')}}">
                                </div>
                            </div> <!--end of row-->
                            {{-- Contacts and Gender --}}
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="phone_number"  class="ml-2">Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="" value="{{old('phone_number')}}">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="YourEmailAddress"  class="ml-2">Email address</label>
                                    <input type="email" name="email" class="form-control" id="YourEmailAddress" placeholder="Enter email" value="{{old('email')}}">
                                </div>
                                <div class="row col-lg-4 justify-content-center">
                                    <!-- RADIO GENDER -->
                                    <div class="mt-2">
                                        <label for="">Gender</label>
                                        <div class="row form-group ">
                                            <div class="col-md-6 form-check">
                                                <input class="form-check-input" type="radio" name="gender" checked value="M">
                                                <label class="form-check-label mr-3">Male</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-check-input " type="radio" name="gender" value="F">
                                                <label class="form-check-label">Female</label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div> <!--end of row-->
                            {{--PASSWORD SECTION--}}
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <div class="form-group">
                                        <label  id="nationality">Nationality</label>
                                        <select class="form-control" name="nationality">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                            <option value="">option 4</option>
                                            <option value="">option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4">
                                    <div class="form-group">
                                        <label  id="region">Region</label>
                                        <select class="form-control" name="region">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                            <option value="">option 4</option>
                                            <option value="">option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4">
                                    <div class="form-group">
                                        <label  id="district">District</label>
                                        <select class="form-control" name="district">
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                            <option value="">option 4</option>
                                            <option value="">option 5</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save and Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection