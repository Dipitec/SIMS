@extends('UxDesignLayout.AuthUserUX.authLayoutUX')
@section('name_page','SIMS Register')
@section('section')
    <div class="row registerCard">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Register Now</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
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
                                               <label class="form-check-label">Male</label>
                                           </div>
                                           <div class="col-md-6">
                                               <input class="form-check-input" type="radio" name="gender" value="F">
                                               <label class="form-check-label">Female</label>
                                           </div>
                                       </div>

                                   </div>

                           </div>
                       </div> <!--end of row-->
                        {{--PASSWORD SECTION--}}
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="UserID"  class="ml-2">Your ID</label>
                                <input type="text" name="userid_number" class="form-control" id="UserID" placeholder="Your ID" value="{{old('userid_number')}}">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="YourPassword"  class="ml-2">Password</label>
                                <input type="password" name="password" class="form-control" id="YourPassword" placeholder="Password" value="{{old('password')}}">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="confirmPassword"  class="ml-2">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
    </div>
@endsection