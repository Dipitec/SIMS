<div class="registerCard m-2">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center h5 text-cyan">Fill this Additional Details of Yourself </div>
        </div>
    </div>
    <form role="form" id="quickForm" method="POST" action="{{--{{route('application.basic-info.create')}}--}}">
        @csrf
        <div class="card-body">
            {{-- SECTION FIRST  RESIDENCE--}}
            <div class="row">
                <div class="form-group col-lg-4">
                    <label for="ward"  class="ml-2">Ward Your Living</label>
                    <input type="text" name="ward" class="form-control" id="last_name" placeholder="" value="{{old('last_name')}}">
                </div>

                <div class="form-group col-lg-4">
                    <label for="street"  class="ml-2">Village|Street</label>
                    <input type="text" name="street" class="form-control" id="last_name" placeholder="" value="{{old('last_name')}}">
                </div>

                <div class="form-group col-lg-4">
                    <label for="house_number"  class="ml-2">House Number</label>
                    <input type="text" name="house_number" class="form-control" id="last_name" placeholder="" value="{{old('last_name')}}">
                </div>

            </div> <!--end of row-->
            {{-- SECTION TWO --}}
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="marital_status"  class="ml-2">Marital Status</label>
                    <select class="form-control " name="marital_status">
                        <option value="">Single</option>
                        <option value="">Married</option>
                        <option value="">Divorced</option>
                    </select>
                </div>
                <div class="form-group  col-lg-3">
                    <label for="disability"  class="ml-2">Disability Status</label>
                    <select class="form-control " name="disability">
                        <option value="">None</option>
                        <option value="">Disabled</option>
                    </select>
                </div>
                <div class="form-group  col-lg-6">
                    <label for="disability_details"  class="ml-2">Disability Details <small style="color: red">#(if any)</small></label>
                   <textArea name="disability_details" class="form-control"></textArea>
                </div>
            </div> <!--end of row-->
            {{-- SECTION THREE --}}
            <div class="row">
                <div class="form-group col-lg-4">
                    <label for="employed"  class="ml-2">Employment</label>
                    <select class="form-control " name="employed">
                        <option value="">Not Employed</option>
                        <option value="">Employed</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="session"  class="ml-2">Preferred Session</label>
                    <select class="form-control " name="session">
                        <option value="">Day Session</option>
                        <option value="">Evening Session</option>
                    </select>
                </div>
                <div class="form-group col-lg-4">
                    <label for="employed"  class="ml-2">Accommodation Need</label>
                    <select class="form-control " name="employed">
                        <option value="">No need</option>
                        <option value="">Campus Hostel</option>
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