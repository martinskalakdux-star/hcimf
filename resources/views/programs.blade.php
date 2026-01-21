<x-layout>



    <!-- NAVAZUJ�C� OBSAH -->
    <section class="content">
        <div class="container2">
            <h2>PROGRAM III. ROČNÍK 2026</h2>
            <br>
            @foreach ($programs as $program)
                <div class="container2-divider2"><span class="star">✦</span></div>
                <br>
                <h3>
                    @foreach ($program->artists as $artist)
                        <strong>
                            @if (!$loop->first), @endif
                            <a style="font-size: 1.5rem; color: rgb(255, 230, 173);" href="{{ route('artist', ['artist' => $artist]) }}" data-type="page">{{ $artist->name }}</a>
                        </strong>
                            - (varhany)
                    @endforeach
                </h3>
                <a>{{ $program->content }}</a>
                <a href="{{ route('program', ['program' => $program]) }}">15. června 2026 od 16:00</a>
                <br>
            @endforeach
        </div>

        <footer class="site-footer" id="sponsors">

            <div class="footer-inner">

                <div class="footer-title">Partneři</div>

                <div class="sponsors-row">
                    <a href="https://www.ccshplzen.cz" class="sponsor">
                        <img src="ccsh.png" alt="ccsh">
                    </a>

                    <a href="https://duxnet.cz" class="sponsor">
                        <img src="d.png" alt="Duxnet.cz">
                    </a>
                    <a href="https://mk.gov.cz" class="sponsor">
                        <img src="mk.jpg" alt="MK">
                    </a>
                    <a href="https://www.plzen2025.eu" class="sponsor">
                        <img src="2025.png" alt="2025">
                    </a>


                </div>

            </div>

        </footer>

    </section>
</x-layout>
