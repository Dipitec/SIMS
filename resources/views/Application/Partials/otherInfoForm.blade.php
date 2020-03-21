<div class="registerCard m-2">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center h5 text-cyan">Fill this Additional Details of Yourself {{Auth::user()->id}} </div>
        </div>
    </div>
    <form role="form" id="quickForm" method="POST" action="{{route('applicant.other-info.create')}}">
        @csrf
        <div class="card-body">
            {{-- SECTION FIRST  RESIDENCE--}}
            <div class="row">
                <div class="form-group col-lg-4">
                    <label for="ward"  class="ml-2">Ward Your Living</label>
                    <input type="text" name="ward" class="form-control" id="last_name" placeholder="" value="{{old('ward')}}">
                </div>

                <div class="form-group col-lg-4">
                    <label for="street"  class="ml-2">Village|Street</label>
                    <input type="text" name="street" class="form-control" id="last_name" placeholder="" value="{{old('street')}}">
                </div>

                <div class="form-group col-lg-4">
                    <label for="house_number"  class="ml-2">House Number</label>
                    <input type="text" name="house_number" class="form-control" id="last_name" placeholder="" value="{{old('house_number')}}">
                </div>

            </div> <!--end of row-->
            {{-- SECTION TWO --}}
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="marital_status"  class="ml-2">Marital Status</label>
                    <select class="form-control " name="marital_status">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                </div>
                <div class="form-group  col-lg-3">
                    <label for="disability_status"  class="ml-2">Disability Status</label>
                    <select class="form-control " name="disability_status">
                        <option value="None">None</option>
                        <option value="Disabled">Disabled</option>
                    </select>
                </div>
                <div class="form-group  col-lg-6">
                    <label for="disability_details"  class="ml-2">Disability Details <small style="color: red">#(if any)</small></label>
                   <textArea name="disability_details" placeholder="Write something about your disability here" class="form-control" value="{{old('disability_details')}}"></textArea>
                </div>
            </div> <!--end of row-->
            {{-- SECTION THREE --}}
            <div class="row">
                <div class="form-group col-lg-4">
                    <label for="employment"  class="ml-2">Employment</label>
                    <select class="form-control " name="employment">
                        <option value="Not Employed">Not Employed</option>
                        <option value="Employed">Employed</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="preferred_session"  class="ml-2">Preferred Session</label>
                    <select class="form-control " name="preferred_session">
                        <option value="Day">Day Session</option>
                        <option value="Evening">Evening Session</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="need_accommodation"  class="ml-2">Accommodation Need</label>
                    <select class="form-control " name="need_accommodation">
                        <option value="No need">No need</option>
                        <option value="Campus Hostel">Campus Hostel</option>
                        <option value="Campus Hostel">External Hostel</option>
                    </select>
                </div>

            </div> <!--end of row-->
            {{--SECTION THREE --}}

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>