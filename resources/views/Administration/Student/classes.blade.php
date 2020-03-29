@extends('layouts.Administration.basic_layout')

@section('content_1')
<div class="row">
 <div class="col-12">
   <div class="card">
     <div class="card-header">
       <h3 class="card-title">Classes</h3>

       <div class="card-tools">
         <div class="input-group input-group-sm" style="width: 150px;">
           <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

           <div class="input-group-append">
             <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
           </div>
         </div>
       </div>
     </div>
     <!-- /.card-header -->
     <div class="card-body table-responsive p-0" style="height: 500px;">
       <table class="table table-head-fixed text-nowrap">
         <thead>
           <tr>
             <th scope="col">Class Code</th>
             <th scope="col">Department</th>
             <th scope="col">Admited Year</th>
             <th scope="col">Class Session</th>
             <th scope="col">Status</th>
             <th scope="col"></th>
             <th scope="col" colspan="">Action</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td scope="col">COE 19</td>
             <td scope="col">Computer Engineering</td>
             <td scope="col">2019/2020</td>
             <td scope="col"><span class="tag tag-success">Morning</span></td>
             <td scope="col">Continue..</td>
             <td>
                <small>
                      <a href="#" class="btn btn-primary btn-sm inline" >Show</a>
                </small>
              </td>
              <td>
                <small>
                  <a href="#" class="btn btn-info btn-sm inline" >Edit</a>
                </small>
              </td>
              <td>
                <form action="#" method="POST" class="pull-right">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger inline btn-sm pull-left">Delete</button>
                  </form>
              </td>
           </tr>
         </tbody>
       </table>
     </div>
     <!-- /.card-body -->
   </div>
   <!-- /.card -->
   <p class="pull-right">
      <a href="#" class="btn btn-info"><i class="fa fa-plus"></i> Add New </a>
    </p>
 </div>

</div>
@endsection
