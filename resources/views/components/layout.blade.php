<html>
    <head>
        <title>a</title>
    </head>
    <body>
        <h1>HCIMF</h1>
        <ul>
            <li><a href="{{ route('home') }}">Uvod</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('articles') }}">Aktuality</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('artists') }}">Umelci</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('programs') }}">Program</a></li>
        </ul>
        <hr />
        {{ $slot }}
    </body>
</html>
