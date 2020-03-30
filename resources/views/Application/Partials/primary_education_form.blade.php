@csrf
<div class="row justify-content-center">
    <div class="col-md-8 row">
        <div class="card col-md-4 ">

            <div class="card-body">
                <label for="primary_name">School Name</label>
                <input type="text" class="form-control" name="primary_name" value="{{old('primary_name')}}">
            </div>
        </div>
        <div class="card col-md-4 ">
            <div class="card-body">
                <label for="primary_graduation_year">Graduation Year</label>
                <input type="text" class="form-control" name="primary_graduation_year" value="{{old('primary_graduation_year')}}">
            </div>
        </div>
        <div class="card col-md-4 ">
            <div class="card-body">
                <label for="primary_school_district">District</label>
                <input type="text" class="form-control"name="primary_school_district" value="{{old('primary_school_district')}}" name="primary_school_district">
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