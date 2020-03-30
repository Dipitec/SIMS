<div class="registerCard m-2">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center h3 text-cyan">First Relative</div>
        </div>
    </div>
    <form role="form" id="quickForm" method="POST" action="{{route('applicant.nextKin-info.create')}}">
        @csrf
        <div class="card-body">
            {{-- SECTION FIRST --}}
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="first_name"  class="ml-2">His/Her First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="" value="{{old('first_name')}}">
                </div>
                <div class="form-group  col-lg-6">
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
                        <input type="text" name="mobile_number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask  value="{{old('mobile_number')}}">
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
                <!-- The RELATIVE  TYPE -->
                <div class="form-group col-lg-3">
                    <label  id="relationship">Relationship</label>
                    <select class="form-control" id="relationship" name="relationship" >
                        <option value="1">Father</option>
                        <option value="2">Mother</option>
                        <option value="3">Wife</option>
                        <option value="4">Husband</option>
                        <option value="5">Others</option>
                    </select>
                </div>
            </div> <!--end of row-->
            {{--SECTION THREE --}}
            <div class="row">
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="national_id">National ID</label>
                       <input type="text" class="form-control" name="national_id">
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="region">Region</label>
                        <select class="form-control" id="region" name="region">
                            <option value="11">option 1</option>
                            <option value="22">option 2</option>
                            <option value="33">option 3</option>
                            <option value="44">option 4</option>
                            <option value="55">option 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="district">District</label>
                        <select class="form-control" id="district" name="district">
                            <option value="1">option 1</option>
                            <option value="2">option 2</option>
                            <option value="4">option 3</option>
                            <option value="3">option 4</option>
                            <option value="5">option 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="p_o_box">P.O Box</label>
                        <input type="text" class="form-control" name="p_o_box" value="{{old('p_o_box')}}" id="po_box">
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