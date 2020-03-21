@extends('UxDesignLayout.AuthUserUX.authLayoutUX')
@section('name_page','SIMS Login')
    @section('section')

        <div class="row justify-content-center registerCard">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="quickForm" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="ml-2">E-Mail</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Type your E-Mail" value="{{old('email')}}">
                            </div>
                            @if(count($errors) > 0)
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1"  class="ml-2">Password</label>
                                <input type="password"   name="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}" placeholder="Type your Password">
                            </div>
                            @if(count($errors) > 0)
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group mb-0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        @endsection