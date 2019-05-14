<!--<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="css/app.css" rel="stylesheet" type="text/css"/>

        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        

        <script src="myscript.js"></script>
    </head>
    <body>
        @yield('sidebar')
            This is the master sidebar.
        

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>-->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="css/app.css" rel="stylesheet" type="text/css"/>

        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        

        <script src="myscript.js"></script>
    </head>
    <body>

    @yield('sidebar')
        
        

        <div class="container">
            @yield('content')
        </div>


    <div class="footer">
    @yield('footer')
    </div>
    </body>
</html>