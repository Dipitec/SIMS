
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/apply/home/user')}}" class="nav-link">Home</a>
        </li> <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/apply/home/user')}}" class="nav-link">Examination</a>
        </li> <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/apply/home/user')}}" class="nav-link">Timetable</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/apply/home/user')}}" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.loginForm') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.registerForm') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
          <li class="nav-item">
              <a id="" class="nav-link" href="{{route('apply.home')}}">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
          </li>
           <li class="nav-item">
               <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </li>

            @endguest

        </li>
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->