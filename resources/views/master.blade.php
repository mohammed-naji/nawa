<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>
        <a href="#">Logo</a>
        {{-- {{ url('/about') }} --}}
        <ul>
            <li><a href="{{ route('indexpage') }}">Home</a></li>
            <li><a href="{{ route('aboutpage') }}">About</a></li>
            <li><a href="{{ route('servicespage') }}">Services</a></li>
            <li><a href="{{ route('teampage') }}">Team</a></li>
            <li><a href="{{ route('contactpage') }}">Contact</a></li>
        </ul>
    </header>

    @yield('content')

    <footer><p>All Copyright reserved</p></footer>

</body>
</html>
