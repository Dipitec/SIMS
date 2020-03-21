<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">

    <title>@yield('name_page')</title>
</head>
<body>
<section class="container">
    <div class="row mt-5 justify-content-center ">
        <div class="">
            @yield('section')
        </div>
    </div>
</section>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>