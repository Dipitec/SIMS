@extends('UxDesignLayout.UxDesignGeneral.mainLayout')
@section('title_bar','Apply Now')
    @section('aside')
        @include('UxDesignLayout.UxDesignGeneral.aside_appl')
        @endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                {{-- +++++++++++++++++++++++++++++++++++++ BASIC INFO FORM ++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}

                <div class="row justify-content-center ">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="list-group text-cyan font-italic">
                                    @foreach($basicInformation as $basicInfoChunk)
                                        <div class="list-group-item"><span class="text-bold text-dark">Names: </span>{{$basicInfoChunk->first_name}} {{$basicInfoChunk->middle_name}} {{$basicInfoChunk->last_name}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Gender: </span>
                                            @if($basicInfoChunk->gender === 'M')
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Nationality: </span>{{$basicInfoChunk->e}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Date Of Birth: </span>{{$basicInfoChunk->dob}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Religion: </span>{{$basicInfoChunk->religion}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Place Of Birth: </span>{{$basicInfoChunk->place_of_birth}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Email: </span>{{$basicInfoChunk->email}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Phone No#: </span>{{$basicInfoChunk->mobile_number}} | {{$basicInfoChunk->mobile_number_alt}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">P.O BOX: </span>{{$basicInfoChunk->p_o_box}}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection
