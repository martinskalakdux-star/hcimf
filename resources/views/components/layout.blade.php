<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>a</title>
    <link rel="stylesheet" href="/style.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var header = document.querySelector('.site-header');
            var btn = document.querySelector('.nav-toggle');
            var nav = document.querySelector('.main-nav');

            if (!header || !btn || !nav) return;

            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                var open = header.classList.toggle('nav-open');
                btn.setAttribute('aria-expanded', open ? 'true' : 'false');
            });

            nav.addEventListener('click', function(e) {
                if (e.target && e.target.tagName === 'A') {
                    header.classList.remove('nav-open');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });

            document.addEventListener('click', function() {
                header.classList.remove('nav-open');
                btn.setAttribute('aria-expanded', 'false');
            });
        });
    </script>
</head>
<body>
    <header class="site-header" id="head">
        <div class="header-inner">
            <!-- LOGO -->
            <div class="logo">
                Harmonia Caelestis
            </div>
            <button class="nav-toggle" type="button" aria-label="Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- NAVIGACE -->
            <nav class="main-nav">
                <a href="{{ route('home') }}">Úvod</a>
                <a href="{{ route('articles') }}">Aktuality</a>
                <a href="{{ route('programs') }}">Program</a>
                <a href="{{ route('artists') }}">Umělci</a>
                <a href="{{ route('about') }}">O festivalu</a>
                <a><img src="" alt="" href=""></a>
                <a><img src="" alt="" href=""></a>
            </nav>
        </div>
    </header>

    {{ $slot }}
</body>
</html>
