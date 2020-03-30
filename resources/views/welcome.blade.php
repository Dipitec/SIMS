@extends('UxDesignLayout.UxDesignGeneral.mainLayout')
@section('aside')

    @include('UxDesignLayout.UxDesignGeneral.aside')
    @endsection
@section('content')

    <div class="content-wrapper">
        {{--_________________________HEADER_____________________________--}}
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Home</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">William</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        {{--_________________________ MAIN BODY OF THE PAGE _____________________________--}}
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>45</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-8">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title m-2">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Quick Access
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#announcements" data-toggle="tab">Announcement</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#profile" data-toggle="tab">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#payments" data-toggle="tab">Payment</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <!-- Announcements -->
                                    <div class="chart tab-pane active" id="announcements"
                                         style="position: relative; height: 300px;">
                                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid animi consequuntur
                                            culpa eaque eligendi, et facere impe
                                            dit magni modi nihil perferendis praesentium recusandae rem sit soluta tempore, unde vero!</p>
                                    </div>
                                    <!-- Profile -->
                                    <div class="chart tab-pane active" id="profile"
                                         style="position: relative; height: 300px;">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid animi consequuntur
                                          culpa eaque eligendi, et facere impe
                                          dit magni modi nihil perferendis praesentium recusandae rem sit soluta tempore, unde vero!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid animi consequuntur
                                            culpa eaque eligendi, et facere impe
                                            dit magni modi nihil perferendis praesentium recusandae rem sit soluta tempore, unde vero!</p>
                                    </div>
                                    <!-- Payments -->
                                    <div class="chart tab-pane" id="payments" style="position: relative; height: 300px;">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid animi consequuntur
                                            culpa eaque eligendi, et facere impe
                                            dit magni modi nihil perferendis praesentium recusandae rem sit soluta tempore, unde vero!</p>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->



                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-4 connectedSortable">
                    {{--______________________ DIRECT CHAT SECTION ________________________________----}}
                    @include('SubSystems.LiveChat.chat')
                    <!--****************direct-chat********************** -->
                    {{--______________________ TASK TO BE DONE SECTION ________________________________----}}

                    @include('SubSystems.TodoTask.todoTasks')

                    <!-- ***************** Task to be done section **********************-->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @endsection