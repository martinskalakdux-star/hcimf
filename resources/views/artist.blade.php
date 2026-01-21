<x-layout>
   
    <section class="content">
        <div class="container">
            <div class="artist-page__img">
            <img src="/storage/{{ $artist->image }}" alt="{{ $artist->name }}">
            </div>  
        </div>
        <br>
        <div class="container2">
            <h1 class="artist-page__name">{{ $artist->name }}</h1>
            <pre class="artist-page__meta">{{ $artist->bio }}</pre>
            <br>
            <br>
            <a>Pepa Novák patří k výrazným osobnostem současné varhanní scény a je vyhledávaným interpretem jak v oblasti klasické varhanní literatury, tak v projektech, které propojují tradiční hudbu s modernějšími přístupy. Narodil se v Německu, kde také vyrůstal v prostředí, které bylo silně formováno hudbou a kulturním životem. Již od útlého věku byl obklopen sakrální hudbou, která ho přivedla k zájmu o varhany – nástroj, jenž se později stal jeho celoživotním uměleckým vyjadřovacím prostředkem.</a>
            <br>
            <a>Hudební vzdělání získal nejprve na místní hudební škole v Bavorsku, kde se věnoval klavíru a základům hudební teorie. K varhanám se dostal přirozenou cestou skrze hru v kostele, kde doprovázel bohoslužby a místní sbory. Jeho talent byl brzy rozpoznán, a proto pokračoval ve studiu na konzervatoři v Mnichově, kde se specializoval na varhanní interpretaci, improvizaci a liturgickou hudbu. Během studia absolvoval také řadu mistrovských kurzů u renomovaných evropských varhaníků, kteří významně ovlivnili jeho interpretační styl.</a>
            <br>
            <a>Profesní dráha Pepy Nováka se postupně rozvíjela napříč Německem, Rakouskem a Českou republikou. V počátcích kariéry působil především jako chrámový varhaník a korepetitor, přičemž se věnoval nejen koncertní činnosti, ale i pedagogické práci. Významným mezníkem v jeho kariéře byla spolupráce s několika významnými sbory a orchestry, díky nimž se dostal k interpretaci rozsáhlých vokálně-instrumentálních děl barokních i romantických skladatelů.</a>
        </div>
        <br>
        <div class="container">
            <a class="back" href="{{ route('artists') }}">Umělci <span class="box__arrow">›</span></a>
            <a class="back" href="{{ route('programs') }}">Program <span class="box__arrow">›</span></a>
        </div>
            
    


    </section>

    
</x-layout>
