<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">DIPITEC SIMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!--_____________________USER PANEL__________________-->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('/apply/home/user')}}" class="d-block">{{Auth::User()->name}}</a>
            </div>
        </div>

        <!--____________________________SIDE BAR MENU_____________________________________ -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                {{-- SIDE BAR FOR THOSE WHO APPLY IN A COLLEGE--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Application
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    {{--application menu--}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('applicant.basic-info')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step One</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('applicant.other-info')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step Two</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('applicant.guardian-info')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step Three</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("applicant.education-verify")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step Four</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("applicant.select-course")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step Five</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("applicant.education-verify")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step Six</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("applicant.attachments-payments")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Step Seven</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                             Submission
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Confirmation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Submit Now</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Application Status</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--*____________________ LOGIN CREDENTIAL __________________________________*--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Login Credentials
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/login.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/register.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Account Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/forgot-password.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Forgot Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/recover-password.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recover Password</p>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- More to Add to the navigation BAr--}}
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>