<?php
 session_start();

    if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <script src="meniu.js"></script>


    <link rel="stylesheet" href="hangul.css" />
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
            <img src="img/hangul.jpg" alt="Picture">
            <div class="title">Hangul</div>
        </div>


        <br />
        <br />

        <div class="additional-container">

            <h3>Consoane</h3>
            <br />
            <br />

            <table>

                <tr>
                    <td>
                        <button class="button" onclick="playAudio('audio1')">
                            ㄱ
                        </button>
                        <audio id="audio1">
                            <source src="audio\K.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =k
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio2')">
                            ㄴ
                        </button>
                        <audio id="audio2">
                            <source src="audio\N.mp3" type="audio/mpeg">
                        </audio>
                        <p>=n</p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio3')">
                            ㄷ
                        </button>
                        <audio id="audio3">
                            <source src="audio\D.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =d
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio4')">
                            ​ㄹ
                        </button>
                        <audio id="audio4">
                            <source src="audio\L.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =r/l
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio5')">
                            ​ㅁ
                        </button>
                        <audio id="audio5">
                            <source src="audio\M.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =m
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio6')">
                            ​​ㅂ
                        </button>
                        <audio id="audio6">
                            <source src="audio\B.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =b
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio7')">
                            ㅇ
                        </button>
                        <audio id="audio7">
                            <source src="audio\Ng.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ng\consoana muta
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="button" onclick="playAudio('audio8')">
                            ㅈ
                        </button>
                        <audio id="audio8">
                            <source src="audio\J.mp3" type="audio/mpeg">
                        </audio>
                        <p>=j</p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio9')">
                            ㅊ
                        </button>
                        <audio id="audio9">
                            <source src="audio\Ch.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ci
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio10')">
                            ​​ㅋ
                        </button>
                        <audio id="audio10">
                            <source src="audio\C.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ch
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio11')">
                            ​ㅌ
                        </button>
                        <audio id="audio11">
                            <source src="audio\T.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =t
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio12')">
                            ​​​ㅍ
                        </button>
                        <audio id="audio12">
                            <source src="audio\P.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =p
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio13')">
                            ​​​ㅅ
                        </button>
                        <audio id="audio13">
                            <source src="audio\S.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =s
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio14')">
                            ​​​ㅎ
                        </button>
                        <audio id="audio14">
                            <source src="audio\H.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =h
                        </p>
                    </td>
                </tr>
            </table>
            <br />
            <br />
        </div>
        <br />
        <div class="additional-container">

            <br />
            <br />
            <h3>Consoane duble</h3>
            <br />
            <br />

            <table>
            
                <tr>
                    <td>
                        <button class="button" onclick="playAudio('audio15')">
                            ㄲ
                        </button>
                        <audio id="audio15">
                            <source src="audio\Kk.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =kk
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio16')">
                            ㅃ
                        </button>
                        <audio id="audio16">
                            <source src="audio\Pp.mp3" type="audio/mpeg">
                        </audio>
                        <p>=pp</p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio17')">
                            ㄸ
                        </button>
                        <audio id="audio17">
                            <source src="audio\Dd.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =dd
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio18')">
                            ​ㅆ
                        </button>
                        <audio id="audio18">
                            <source src="audio\Ss.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ss
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio19')">
                            ​ㅉ
                        </button>
                        <audio id="audio19">
                            <source src="audio\Jj.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =jj
                        </p>
                    </td>

                </tr>
            </table>

            <br />
            <br />
        </div>

        <br />

        <div class="additional-container">
            <br />
            <br />
            <h3>Vocale</h3>
            <br />
            <br />

            <table>

                <tr>
                    <td>
                        <button class="button" onclick="playAudio('audio20')">
                            ㅏ
                        </button>
                        <audio id="audio20">
                            <source src="audio\A.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =a
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio21')">
                            ㅐ
                        </button>
                        <audio id="audio21">
                            <source src="audio\E!.mp3" type="audio/mpeg">
                        </audio>
                        <p>=e</p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio22')">
                            ㅑ
                        </button>
                        <audio id="audio22">
                            <source src="audio\IA.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ia

                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio23')">
                            ㅒ
                        </button>
                        <audio id="audio23">
                            <source src="audio\IE.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ie
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio24')">
                            ​ㅓ
                        </button>
                        <audio id="audio24">
                            <source src="audio\O.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =o
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio25')">
                            ​​ㅔ
                        </button>
                        <audio id="audio25">
                            <source src="audio\E2.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =e
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio26')">
                            ㅕ
                        </button>
                        <audio id="audio26">
                            <source src="audio\IO.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =io
                        </p>
                    </td>

                    <td>
                        <button class="button" onclick="playAudio('audio27')">
                            ㅖ
                        </button>
                        <audio id="audio27">
                            <source src="audio\IE.mp3" type="audio/mpeg">
                        </audio>
                        <p>=ie</p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio29')">
                            ㅗ
                        </button>
                        <audio id="audio29">
                            <source src="audio\O.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =o
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio30')">
                            ​​ㅘ
                        </button>
                        <audio id="audio30">
                            <source src="audio\OA.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =oa
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio31')">
                            ​ㅙ
                        </button>
                        <audio id="audio31">
                            <source src="audio\OE.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =oe
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="button" onclick="playAudio('audio32')">
                            ​​​ㅚ
                        </button>
                        <audio id="audio32">
                            <source src="audio\UI.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ui
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio33')">
                            ​​​ㅛ
                        </button>
                        <audio id="audio33">
                            <source src="audio\IO.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =io
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio34')">
                            ​​​ㅜ
                        </button>
                        <audio id="audio34">
                            <source src="audio\U.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =u
                        </p>
                    </td>


                    <td>
                        <button class="button" onclick="playAudio('audio35')">
                            ㅝ
                        </button>
                        <audio id="audio35">
                            <source src="audio\UO.mp3" type="audio/mpeg">
                        </audio>
                        <p>=uo</p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio36')">
                            ㅞ
                        </button>
                        <audio id="audio36">
                            <source src="audio\UE.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ue
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio37')">
                            ​​ㅟ
                        </button>
                        <audio id="audio37">
                            <source src="audio\UI.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =ui
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio38')">
                            ​ㅠ
                        </button>
                        <audio id="audio38">
                            <source src="audio\IU.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =iu
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio39')">
                            ​​​ㅡ
                        </button>
                        <audio id="audio39">
                            <source src="audio\A.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =â
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio40')">
                            ​​​ㅢ
                        </button>
                        <audio id="audio40">
                            <source src="audio\Ai.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =âi
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio41')">
                            ​​​ㅣ
                        </button>
                        <audio id="audio41">
                            <source src="audio\I.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =i
                        </p>
                    </td>
                </tr>
            </table>
            <br />
            <br />
        </div>


        <div class="additional-container2">
            <br />
            <br />

            <h3>Cum scriem?</h3>
            <br />
            <br />
            <p>
                În coreeană modul în care scriem silabele diferă față de limba română.
                Literele sunt așezate într-un ”bloc” și putem avea urmatoarele cazuri:
            </p>
            <img src="img\image.png" />
            <br />
            <p>
                ​Numarul 2 trebuie să fie mereu o vocală și restul (1,3, uneori și 4) sunt consoane.
                Așadar, în funcție de forma ei vom decide care dintre cele două așezări este cea corectă.
            </p>
            <p>
                <img src="img\image1.png" alt="First Picture">
                &nbsp; sau &nbsp;
                <img src="img\image2.png" alt="Second Picture">
            </p>
            <br />
            <p>

                Ca să scriem corect o silabă putem urmări următorii pași:<br />
                <ol>
                    <li>Stabilim  dacă vocala este scrisă vertical sau orizontal (ㅛ,ㅗ,ㅡ,ㅜ,ㅠ - orizontal => tip 1; ㅛ,ㅗ,ㅡ,ㅜ,ㅠ - vertical => tip 2).</li>
                    <li>Dacă silaba se termină cu o consoană atunci este de tipul 1-2-3, dacă nu avem doar 1-2.</li>
                    <li>Plasăm prima consoană pe poziția 1, apoi vocala pe 2 și, dacă este necesar, celelalte consoane pe 3 și 4.</li>
                </ol>

                <br />
                Ex.: <br>
                <img src="img\image3.png" />
            </p>
        </div>
        <div class="additional-container2">
            <h3>Care e diferența dintre ㄱ și ㄲ?</h3>
            <p>
                Mai exact care este diferența dintre consoanele simple și cele duble?
                În primul rând sunt litere complet diferite.
                Pronunția lor este foarte asemănătoare însă diferă în principiu prin intensitate.
                Consoanele duble sunt mai accentuate. ㄲ s-ar scrie ”gg” dar nu este un ajutor prea mare.
                Pentru moment este important să reținem că aceste litere sunt mai intense decât celelalte.
            </p>
            <br />
            <br />
            <br />
            <h3>받침</h3>
            <br />
            <p>
                받침 este numele ultimei consoane dintr-o silabă. Ea este importantă pentru că ne ajută să scriem corect.
                În acest mod ne dăm seama dacă trebuie să scriem 겊이 sau 거피.
                <br />
                De asemenea, unele pronunția anumitor consoane diferă când sunt 받침.
            </p>
            <br />
            <br />
            <h3>ㅈ,ㄷ,ㅅ,ㅌ,ㅊ,ㅆ, in 받침</h3>
            <br />
            <p>
                Toate aceste consoane își schimbă pronunția în momentul în care sunt plasate în 받침.\
                De aceea cuvintele precumum 꽃 (floare)  și 맛 (gust) se pronunță ca și 꽅  și 맡.
                Această informație este foarte importantă pentru a pronunța corect cuvintele, așa că vă sfătuiesc să o memorați. 
            </p>
            <br />
            <br />
            <p>
                <b>Reguli speciale:</b> <br />
                Cel mai ușor este să pronunți cuvintele pe silabe însă în anumite momente nu putem applica această regulă.
                Spre exemplu dacă o avem ca 받침 și este urmat de o vocală.
                În acest caz, litera ㅇ se va plasa chiar înaintea vocalei dar va fi mută.
                Rolul ei este să facă legătura dintre cele două litere fiind mai ușor de legat între ele. 
            </p>
            </br> <br />
           <div style="text-align: center;">
    <h3>Videoclipuri ajutatoare:</h3>

    <div style="display: inline-block; margin: 10px;">
    <p>Exerseaza cititul</p>
        <iframe width="600" height="390" src="https://www.youtube.com/embed/SzAb6wGpv9c?si=GqtLGcazlTFA9csF" frameborder="0" allowfullscreen></iframe>
        
    </div>

    <div style="display: inline-block; margin: 10px;"> 
    <p>Exerseaza silabe</p>
        <iframe width="600" height="390" src="https://www.youtube.com/embed/7QXlNdIpsmc?si=NslnJYmI1lOWgxMW" frameborder="0" allowfullscreen></iframe>
       
    </div>

    <div style="display: inline-block; margin: 10px;">
    <p>Dictare</p>
        <iframe width="600" height="390" src="https://www.youtube.com/embed/JUWgP5gNiHk?si=zWDDyD8HWhWzQSBz" frameborder="0" allowfullscreen></iframe>
        
    </div>
</div>

        <div class="additional-container2">
       
<?php include 'score.php'; ?>

        



         <div id="score-display">
    <!-- Score will be displayed here -->
</div>

            </div>

    
            </div>
        
    </div>
    
</body>
</html>