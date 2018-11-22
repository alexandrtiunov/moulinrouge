<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    @section('title')
    <title>Административная панель</title>
    @show

    <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ URL::to('markitup/skins/markitup/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('markitup/sets/default/style.css') }}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>--}}
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script type="text/javascript" src="{{ URL::to('markitup/jquery.markitup.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('markitup/sets/default/set.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('/js/jquery.liTranslit.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin.js') }}" defer ></script>

</head>
<body>

@yield('content')

</body>
</html>