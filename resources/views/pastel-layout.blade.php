<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="open source html and css template">
    <meta name="author" content="mlp design">
    <meta name="robots" content="index, follow">
    {{-- <link rel="stylesheet" href="/css/pastel.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Menu Items -->
    <nav>
        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
        <label for="show-menu" class="close"><span class="fa fa-times"></label>
        <ul id="menu">
            <li><a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Kezdőoldal</a></li>
            <li><a href="/contact" class="{{ Request::path() === 'contact' ? 'active' : '' }}">Kapcsolat</a></li>
            <li><a href="/pass-array" class="{{ Request::path() === 'pass-array' ? 'active' : '' }}">Tömb adatainak küldése</a></li>
            <li><a href="/request-test?title=MyFirstTitle" class="{{ Request::path() === 'request-test' ? 'active' : '' }}">Adatküldés URL segítségével</a></li>
            <li><a href="/posts/elso-bejegyzes" class="{{ Request::path() === 'posts/elso-bejegyzes' ? 'active' : '' }}">Első blogbejegyzés</a></li>
            {{-- <li><a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a></li> --}}
        </ul>
    </nav>
    <!-- // -->
    <!-- Banner -->
    <div id="banner">
        <div id="header">
            <h1>OldSchool Pastel</h1>
            <p class="sub">Fluid, responsive website template by MLPdesign.</p>
        </div>
    </div>
    <!-- // -->
    <div id="content">
        <!-- Page Items -->
        <div class="pageitem">
            <h2>@yield('title')</h2>
            <p>@yield('content')</p>
        </div>
    </div>
    <!-- Footer Items -->
    <div id="footer">
        <p>&copy; Copyright Your Name</p>
        <!--Credits below must be kept under CC-NC 3.0 License-->
        <p><a href="http://www.mlpdesign.net">HTML and CSS</a> by MLPdesign.net</p>
    </div>
    <!-- // -->
</body>

</html>
