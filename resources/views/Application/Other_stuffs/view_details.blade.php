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
                {{-- +++++++++++++++++++++++++++++++++++++ OTHER DETAILS  REVIEW ++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}


                <div class="row justify-content-center ">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="list-group text-cyan font-italic">
                                    @foreach($otherDetailsView as $otherDetailsChunk)
                                        <div class="list-group-item">
                                            <span class="text-bold text-dark">Ward </span>{{$otherDetailsChunk->ward}}
                                            <span class="text-bold text-dark">Street: </span>{{$otherDetailsChunk->street}}
                                            <span class="text-bold text-dark">House No#: </span>{{$otherDetailsChunk->house_number}}
                                        </div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Marriage: </span>{{$otherDetailsChunk->marital_status}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Disability Status: </span>{{$otherDetailsChunk->disability_status}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Disability Details: </span>{{$otherDetailsChunk->disability_details}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Employment: </span>{{$otherDetailsChunk->employed}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Preferred Session: </span>{{$otherDetailsChunk->preferred_session}}</div>
                                        <div class="list-group-item"><span class="text-bold text-dark">Accommodation: </span>{{$otherDetailsChunk->need_accommodation}}</div>
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
