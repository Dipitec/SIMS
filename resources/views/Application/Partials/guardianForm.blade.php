<div class="registerCard m-2">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center h3 text-cyan">First Relative</div>
        </div>
    </div>
    <form role="form" id="quickForm" method="POST" action="{{--{{route('application.basic-info.create')}}--}}">
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
                        <input type="text" name="mobile_number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <label for="mobile_number_alt"  class="ml-2">Phone Number <span style="color:#ff1b0c;">#2</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="mobile_number_alt" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <label for="YourEmailAddress"  class="ml-2">Email address</label>
                    <input type="email" name="email" class="form-control" id="YourEmailAddress" placeholder="Enter email" value="{{old('email')}}">
                </div>
                <!-- The RELATIVE  TYPE -->
                <div class="form-group col-lg-3">
                    <label  id="relative">Relationship</label>
                    <select class="form-control " name="relative">
                        <option value="">Father</option>
                        <option value="">Mother</option>
                        <option value="">Wife</option>
                        <option value="">Husband</option>
                        <option value="">Others</option>
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
                        <select class="form-control" name="region">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                            <option value="">option 4</option>
                            <option value="">option 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-3">
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
                <div class="form-group col-lg-3">
                    <div class="form-group">
                        <label  id="po_box">P.O Box</label>
                        <input type="text" class="form-control" name="po_box">
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