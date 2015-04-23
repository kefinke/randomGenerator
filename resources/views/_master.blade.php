<!DOCTYPE>
<html>
<head>
    <title>
        @yield('title')
    </title>
        @yield('head')
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
    <body>
        <a href="/"><div id="header">Random Generator</div></a>
        @yield('content')
    </body>
</html>