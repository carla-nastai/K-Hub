<?php
session_start();


if (!isset($_SESSION['user_id'])) {
   
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="istorie.css" />
    <script src="meniu.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
</head>
<body>


    <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="menu" id="menu">
        <a href="home.php">Home</a>
        <a href="hangul.php">Hangul</a>
        <a href="vocabular.php">Vocabular</a>
        <a href="gramatica.php">Gramatică</a>
        <a href="istorie.php">Istorie</a>
        <a href="scores.php">Scores</a>
    </div>

    <div class="bd">


        <div class="container">
            <img src="img/istorie.jpg" alt="Picture">
            <div class="title">Istoria țării și a limbii</div>
        </div>
        <br /><br />
        <div class="additional-container2">
            <h2>Salut!</h2>
            <p>
                Haide să călătorim în timp și să descoperim povestea fascinantă a alfabetului sud-coreean, cunoscut sub numele de Hangeul.
                Nu este doar un simplu sistem de scriere; este o abordare creativă și revoluționară care a avut un impact durabil asupra identității culturale
                și lingvistice a Coreei de Sud.
                <br /><br />
                În vremurile de demult, înainte ca Hangeul să apară în peisaj, lucrurile erau puțin complicate.
                Peninsula Coreeană era influențată de caracterele chinezești numite Hanja, care erau folosite în principal de clasa superioară și de savanți.
                Dar ghici ce? Aceste caractere erau complexe și greu de învățat, așa că majoritatea oamenilor obișnuiți se luptau cu cititul și scrisul.
                Era ca și cum ai încerca să rezolvi un puzzle fără piesele potrivite. Trebuia să se întâmple ceva schimbare.
                <br /><br />
                Intră în scenă Regele Sejong cel Mare, al patrulea rege al Dinastiei Joseon.
                El a recunoscut necesitatea unui sistem de scriere mai simplu și mai accesibil pentru poporul coreean.
                Așa că, în secolul al XV-lea, a adunat un grup de savanți și lingviști și împreună au pornit într-o misiune de a crea ceva extraordinar.
                Și uite așa! Hangeul a luat naștere.
                <br /><br />
                Hangeul a fost o revoluție. A constat în caractere care reprezentau sunetele consoanei și vocalelor, făcându-l logic și ușor de utilizat.
                Niciun ghicit sau luptă cu caractere complicate. Echipa lui Regele Sejong a făcut o treabă excelentă!
                Hangeul a fost oficial introdus în 1446 prin intermediul unei publicații numite "Hunminjeongeum", care explica cum funcționează noul sistem.
                <br /><br />
                Poți să-ți închipui impactul pe care l-a avut? A fost incredibil! Dintr-o dată, oamenii obișnuiți puteau citi, scrie și se puteau exprima.
                A fost ca și cum li s-a dat o unealtă puternică pentru a-și descoperi potențialul. Hangeul a devenit un simbol al identității și unității
                naționale în rândul populației coreene, întărindu-le patrimoniul cultural și limbajul.
                <br /><br />
                Desigur, au existat și oameni care au rezistat acestui nou alfabet. Și Hanja a continuat să fie folosită alături de Hangeul.
                Dar în timp, Hangeul a câștigat popularitate și influență. A devenit scriptul preferat pentru comunicare de zi cu zi, literatură
                și documente oficiale. A jucat un rol crucial în conservarea și promovarea patrimoniului cultural coreean
                , în educație și răspândirea cunoașterii.
                <br /><br />
                Acum, să sărim puțin în viitor. Coreea de Sud de astăzi are o legătură profundă cu istoria și patrimoniul cultural.
                De la regatele antice precum Gojoseon, Goguryeo, Baekje și Silla, până la prospera Dinastie Joseon, a fost o călătorie uimitoare.

                A fost o perioadă dificilă de ocupație japoneză între 1910 și 1945, care a adus provocări și schimbări semnificative.
                <br /><br />
                Dar hei, Coreea de Sud a revenit! După cel de-Al Doilea Război Mondial, Peninsula Coreeană a fost eliberată, deși a fost împărțită în
                două țări separate, Coreea de Nord și Coreea de Sud, de-a lungul celebrei paralele de la 38. Coreea de Sud s-a confruntat cu sarcina de
                a se reconstrui și dezvolta de la zero. Și uite ce-au reușit să facă!
                <br /><br />
                Prin intermediul unui proces rapid de industrializare, adesea numit "Miracolul de pe Râul Han", Coreea de Sud s-a transformat într-o putere
                economică. Avansurile tehnologice, inovația și exporturile culturale precum K-pop și serialele coreene au pus Coreea de Sud pe harta globală.
                A fost uimitor să asistăm la ascensiunea lor la faimă!
                <br /><br />
                Astăzi, Coreea de Sud este o țară vibrantă și modernă, cunoscută pentru priceperea sa tehnologică, patrimoniul cultural bogat și contribuțiile
                globale. Hangeul rămâne o parte iubită a identității sud-coreene, reflectând angajamentul lor față de educație, alfabetizare și conservarea                 culturală.
                <br /><br />
                Aceasta a fost  călătoria  noastră rapidă prin istoria Hangeul și Coreea de Sud. Este o poveste despre rezistență, creativitate și mândrie
                culturală. Hangeul le-a oferit oamenilor coreeni o voce, iar ei nu s-au oprit din a cânta de atunci.
            </p>

        </div>
        <br /><br />
        <div class="additional-container2">
            <h3>GALERIE FOTO</h3>

        </div>

        <div class="additional-container2">
            <table class="gallery-table">
                <tr>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist1.jpg" alt="Image 1">
                            <div class="overlay"></div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist2.jpg" alt="Image 2">
                            <div class="overlay"></div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist3.jpg" alt="Image 3">
                            <div class="overlay"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist4.jpg" alt="Image 4">
                            <div class="overlay"></div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist5.jpg" alt="Image 5">
                            <div class="overlay"></div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist6.jpg" alt="Image 6">
                            <div class="overlay"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist7.jpg" alt="Image 4">
                            <div class="overlay"></div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist8.jpg" alt="Image 5">
                            <div class="overlay"></div>
                        </div>
                    </td>
                    <td>
                        <div class="gallery-item">
                            <img src="img/ist9.jpg" alt="Image 6">
                            <div class="overlay"></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>




    </div>
    <br />
    <br />

</body>
</html>