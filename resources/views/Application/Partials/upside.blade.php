<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Basic  Information<small> {{Auth::User()->name}}</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a  class="text-secondary" href="{{route('apply.home')}}">@yield('upside1')</a></li>
                    <li class="breadcrumb-item active"><a  href="{{route('applicant.basic-info')}}">@yield('upside2')</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>