<div class="row justify-content-center ">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <div class="list-group text-cyan font-italic">
                    @foreach($primaryKey as $primaryDetailChunk)
                        <div class="list-group-item">
                            <span class="text-bold text-dark">Primary School Name: </span>{{$primaryDetailChunk->primary_name}}
                            <span class="text-bold text-dark">Graduation Year: </span>{{$primaryDetailChunk->primary_graduation_year}}
                            <span class="text-bold text-dark">District : </span>{{$primaryDetailChunk->primary_district}}
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>