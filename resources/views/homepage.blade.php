<x-layout>
    <section class="hero" id="img">
        <div class="hero__overlay"></div>
        <div class="hero__content">
            <h2>Festival klasické hudby</h2>
            <h1>Harmonia Caelestis</h1>
            <h3>Těšíme se na Vás v novém roce 2026!</h3>

        </div>
    </section>
    <section class="content">
        <div class="container" id="button">
            <a href="Program.php" class="btn-program">
                Program 2026
                <span class="btn-arrow">›</span>
            </a>

        </div>
        <section class="feature-grid" id="boxs">
            <article class="glass-card" id="aktuality">
                <h3 class="glass-title">Nejbližší koncerty</h3>

                <div class="glass-list">
                    @foreach ($programs as $program)
                        <div class="glass-item">
                            <div class="glass-date">5. ledna · 19:00</div>
                            <div class="glass-place">Kostel sv. Mikuláše, Praha</div>
                            <div class="glass-note">{{ $program->name }}</div>
                        </div>
                    @endforeach

                    <div class="glass-divider"></div>

                    <div class="glass-item">
                        <div class="glass-date">14. ledna · 19:00</div>
                        <div class="glass-place">Kostel sv. Bartoloměje, Pardubice</div>
                        <div class="glass-note">Slavnostní večer</div>
                    </div>

                    <div class="glass-divider"></div>

                    <div class="glass-item">
                        <div class="glass-date">18. ledna · 19:00</div>
                        <div class="glass-place">Kostel sv. Martina v Hlinsku</div>
                        <div class="glass-note">Komorní koncert</div>
                    </div>
                </div>
                <div class="glass-actions">
                    <a class="btn-glass" href="{{ route('programs') }}">Zobrazit program <span>›</span></a>
                </div>
            </article>

            <!-- BOX 2 -->
            <article class="glass-card" id="festival">
                <h3 class="glass-title">O festivalu</h3>

                <div class="glass-media">
                    <img src="festival.jpg" alt="">
                </div>

                <p class="glass-text">
                    Festival klasické hudby zve z srdce hudební příznivce na koncerty a večery plné jedinečné atmosféry.
                </p>

                <div class="glass-actions">
                    <a class="btn-glass" href="{{ route('about') }}">Více o festivalu <span>›</span></a>
                </div>
            </article>

            <article class="glass-card" id="umelci">
                <h3 class="glass-title">Umělci</h3>

                <div class="artist-row">
                    <div class="artist">
                        <img src="a1.png" alt="">
                        <div class="artist-name">Michaela Káčerková</div>
                    </div>
                    <div class="artist">
                        <img src="a2.png" alt="">
                        <div class="artist-name">Josef Kovačič</div>
                    </div>
                    <div class="artist">
                        <img src="a3.png" alt="">
                        <div class="artist-name">Kateřina Málková</div>
                    </div>
                </div>
                <p class="glass-text">
                    Špičkoví interpreti, jedinečné programy a slavnostní koncerty v mimořádných prostorách.
                </p>

                <div class="glass-actions">
                    <a class="btn-glass" href="{{ route('artists') }}">Všichni umělci <span>›</span></a>
                </div>
            </article>
        </section>
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