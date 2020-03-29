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
                {{-- +++++++++++++++++++++++++++++++++++++ GUARDIAN INFO REVIEW ++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}

                <div class="row justify-content-center ">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="list-group text-cyan font-italic">
                                    @foreach($guardianDetailsView as $guardianDetailChunk)
                                        <div class="list-group-item">
                                            <span class="text-bold text-dark">Names: </span>
                                            {{$guardianDetailChunk->first_name}} {{$guardianDetailChunk->last_name}}
                                        </div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Email: </span>{{$guardianDetailChunk->email}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Phone No#: </span>{{$guardianDetailChunk->mobile_number}} | {{$guardianDetailChunk->mobile_number_alt}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">RelationShip: </span>{{$guardianDetailChunk->relationship}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Living In: </span>{{$guardianDetailChunk->region}} | {{$guardianDetailChunk->district}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">P.O Box: </span>{{$guardianDetailChunk->p_o_box}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">National Id: </span>{{$guardianDetailChunk->national_id}}</div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    @endsection
