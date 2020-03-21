<div class="registerCard m-2">
    <form role="form" id="quickForm" method="POST" action="{{route('application.basic-info.create')}}">
        @csrf
        <div class="card-body">
            {{-- SECTION FIRST --}}
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
            {{-- SECTION TWO --}}
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="mobile_number"  class="ml-2">Phone Number <span style="color:#ff1b0c;">#1</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="mobile_number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{old('mobile_number')}}">
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <label for="mobile_number_alt"  class="ml-2">Phone Number <span style="color:#ff1b0c;">#2</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="mobile_number_alt" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{old('mobile_number_alt')}}">
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <label for="YourEmailAddress"  class="ml-2">Email address</label>
                    <input type="email" name="email" class="form-control" id="YourEmailAddress" placeholder="Enter email" value="{{old('email')}}">
                </div>
                <div class="row col-lg-3 justify-content-center">
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
            {{--SECTION THREE --}}
            <div class="row">
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="religion">Religion</label>
                        <select  class="form-control" name="religion">
                            <option value="Christian">Christian</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Budhaa">Budhaa</option>
                            <option value="Sabath">Sabath</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="nationality">Nationality</label>
                        <select class="form-control" name="nationality">
                            <option value="1">option 1</option>
                            <option value="2">option 2</option>
                            <option value="3">option 3</option>
                            <option value="4">option 4</option>
                            <option value="5">option 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="region">Region</label>
                        <select class="form-control" name="region">
                            <option value="1">option 1</option>
                            <option value="2">option 2</option>
                            <option value="3">option 3</option>
                            <option value="4">option 4</option>
                            <option value="5">option 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="district">District</label>
                        <select class="form-control" name="district">
                            <option value="1">option 1</option>
                            <option value="2">option 2</option>
                            <option value="3">option 3</option>
                            <option value="4">option 4</option>
                            <option value="5">option 5</option>
                        </select>
                    </div>
                </div>


            </div>
            {{--SECTION FOUR --}}
            <div class="row">
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="country_of_birth">Born Country</label>
                        <select class="form-control" name="country_of_birth">
                            <option value="1">option 1</option>
                            <option value="2">option 2</option>
                            <option value="3">option 3</option>
                            <option value="4">option 4</option>
                            <option value="5">option 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="place_of_birth">Place of Birth</label>
                        <input type="text" class="form-control" name="place_of_birth" value="{{old('place_of_birth')}}">
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">

                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            <label  id="dob">Date of Birth</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" name="dob" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="{{old('dob')}}" data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="district">P.O Box</label>
                        <input type="text" name="p_o_box" class="form-control" value="{{old('p_o_box')}}">
                    </div>
                </div>


            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>