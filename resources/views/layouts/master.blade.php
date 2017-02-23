<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @section('header')
            <ul>
                <li><a href="{{url('all')}}">View All Members</a></li>
                <li><a href="{{url('addMemberForm')}}">Add Member</a></li>
            </ul>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
