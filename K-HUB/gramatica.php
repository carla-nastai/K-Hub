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

    <link rel="stylesheet" href="gramatica.css" />
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
            <img src="img/gram.jpg" alt="Picture">
            <div class="title">Gramatică</div>
        </div>
        <br /><br />
        <div class="additional-container2">
            <h3>Ordine în propoziții</h3>
            <br />
            <p>
                Părțile de vorbire sunt ordonate diferit în coreeană față de limba română.
                Ordinea corectă este Subiect-Obiect-Verb sau Subiect-Adjectiv.
                Adjectivele se comporta asemănător cu verbele, fiind conjugabile.<br />
                Propozițiile trebuie mereu să se termine într-un verb, adjectiv sau 이다.<br />
                Dacă un adjectiv este prezent atunci nu avem nevoie de un obiect sau un alt verb în propoziție.
            </p>
            <br /><br />
            <br /><br />
            <h3>이다</h3>
            <p>
                ​이다 nu este nici verb nici adjectiv, deși traducerea sa este ”a fi”. Neîncadrânduse în cele două categorii el nu poate acționa pe un obiect, așadar propoziții ca ”Ea e frumoasă” nu necesită prezența lui. 이다 se folosește pentru a scrie ”*substantiv* este *substantiv*”.<br />
                Spre deosebire de limba noastră, în coreeană există o singură formă pentru toate pronumele.<br />
                이다 se lipește de cel de-al doilea cuvânt, dar acesta nu este un obiect.<br /><br />


                <b>Ex:</b><br />
                나는 여​자야  = Sunt o femeie<br /><br />

                <b>șablon:</b> <br />
                나는 ______이다 = I am a _______<br />
                (나는 _______ 이야 / 저는 _____이에요)<br />
                <br />
                Pentru a-l conjuga voi folosi notațiile 1,2 și 3 pentru gradele de respect.<br />
            </p>
            <br />
            <table>

                <tr>
                    <td colspan="2">
                        <b>PREZENT</bstyle="align-content:center">
                    </td>
                    <td colspan="2">
                        <b>TRECUT</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        grad 1: se adaugă 이야/야 la cuvântul precedent (de care era legat 이다)
                        <br />
                        나는 좋은 학생이야 = Eu sunt un student bun<br />
                        ​그것은 사과야 = Acel lucru este un măr
                    </td>
                    <td>
                        grad 2: se adaugă 이에요/예요<br />

                        저는 좋은 학생이에요 = ​Eu sunt un student bun<br />
                        저것은 사과예요 = ​Acel lucru este un măr<br />
                    </td>


                    <td>
                        grad 1: + 이었어/였어<br />

                        나는 학생이었어 = Am fost un student<br />
                        나는 나쁜 애기였어 = Am fost un copil rău<br />
                    </td>
                    <td>
                        grad 2: + 이었어요/이었어요<br />

                        저는 선생님이었어요 =Am fost profesor<br />
                        저는 나쁜 애기였어요 = ​Am fost un copil rău<br />
                    </td>

                </tr>
                <tr>
                    <td colspan="2">
                        grad 3: se adaugă 입니다<br />

                        저는 좋은 학생입니다 =​Eu sunt un student bun<br />
                        그 사람은 저의 형입니다 = Acea persoană este fratele meu<br />
                    </td>
                    <td colspan="2">
                        grad 3: + 이었습니다/였습니다<br />

                        저는 선생님이었습니다 = ​Am fost profesoară<br />
                        저는 의사였습니다 = Am fost doctor<br />
                    </td>
                </tr>
            </table>
            <br /><br /><br /><br />
            <p>
                Pentru a forma viitorul este mult mai practic să folosim cuvântul 되다. 되다 înseamnă ”a deveni”. Cele două adjective sunt totuși puțin diferite. Toruși, dacă ne referim strict la formele lor de viitor și scopurile pentru care le folosim sunt foarte similare. <br /><br />
                저는 곧 선생님이 될 것입니다 = Voi deveni profesoară în curând<br />
                저는 곧 선생님일 거예요 = ​Voi fi profesoară în curând<br />
                <br />
                Folosim 이다 la forma sa viitoare și pentru a ne da cu părerea la ceva, spre exemplu.<br />

                그 사람이 의사일 거예요 = Acea persoană este, cel mai probabil, un doctor<br />
            </p>
            <br /><br /><br />
            <h3>있다</h3>
            <br />
            <p>
                있다 are mai multe semnificații. Două dintre ele sunt ”a avea” și ”a fi undeva”.<br />
                A avea este un adjectiv în coreeană. De aceea este incorect să folosim 을/를, deoarece nu există obiecte în propoziție. În schimb vom folosi 이/가. <br />
                나는 펜이 있어  = Am un creion<br /><br />
                Dacă vrem să exprimăm unde se afla subiectul, folosim tot 을/를, împreună cu sufixul 에. Acest sufix se lipește de cuvintele din propoziții care exprimă locația sau timpul. Și dacă există adverbe de loc, tot el se va lega de ele. 에 va fi automat înlocuitorul pentru 이/가. Există câteva excepții:  오늘, 내일 și 어제.<br />

                나는 학교에 있어  = Sunt la școală<br />
                식당은 은행 옆에 있어 = Restaurantul e lângă bancă<br />
            </p>
            <br /><br /><br /><br />
            <h3>많다</h3>

            <p>
                =a fi mai mult din acel lucru.<br /><br />
                poate fi folosit pentru a descrie ceva și atunci are formă de adjectiv, dar poate de asemenea să fie și predicatul propoziției.
                <br /><br />
                나는 많은 돈이 있어 = Am mulți bani<br />

                음식이 많아  = Este multă mâncare
            </p>
        </div>
        <br /><br /><br />
        <div class="additional-container2">
            <br />
            <h3>은/는 și 을/를</h3>
            <br />
            <p>
                Aceste sufixe marchează subiectul și obiectul propoziției. 은/는 este pentru subiect, pe când 을/를 se lipesc de obiecte. În funcție de 바침 ne dăm seama care formă trebuie folosită. Dacă acesta este o consoană, se va aștepta după el forma care începe cu o vocală și vice-versa.  <br />

                <b>Ex:</b><br />
                그 사람은 선생님이야 = Acea persoană este un profesor<br />
            </p> <br /><br /><br />
            <h3>이/가</h3>
            <p>
                Aceste sufixe sunt foarte similare cu 은/는 . Am văzut mai sus un exemplu în care este absolut necesar să folosim aceste sufixe.
                Dar mai există și alte situații. <br />

                은/는  sunt folosite când se exprimă un fapt concret, pe când 은/는 exprimă o subtilă comparație între subiect și altceva. Pe exemplul prezentat, am putea completa propoziția în urmatorul fel ”pisica este în spatele casei dar câinele este înauntru”. Astfel poziția pisicii este comparată cu cea a câinelui. <br />
                고양이는 집 뒤에 있어  = Pisica e în spatele casei<br />
                고양이가 집 뒤에 있어 = Pisica e în spatele casei<br />
            </p>
            <br /><br /><br />
            <h3>ㄴ/은</h3>
            <br />
            <p>
                Adjectivele pot fi folosite cu același rol pe care îl au și în română, nu este obligatoriu să înlocuiască un verb. Pentru a modifica forma din dicționar astfel încât să îl putem folosi trebuie să eliminăm sufixul 다  și să îl înlocuim cu ㄴ/은.  <br />
                Poziția lui în propoziție, după transformare, este aceeași ca și în engleză, înaintea substantivului. 
                O mică excepție se aplică adjectivelor care se termină în 있다. În acest caz folosim sufixul 는.<br />
                <br />
                나는 배를 원해  = Vreau o barcă<br />

                나는 비싼 음식을 먹어 =Eu mănânc mâncare scumpă<br />

                나는 비싼 음식을 좋아해  = Îmi place mâncarea scumpă<br />

                비싼 음식은 맛있어 = Mâncarea scumpă este delicioasă<br />
            </p>
            <br /><br /><br /><br />
            <h3>~도</h3>
            <br />
            <p>
                도 este un sufix care se poate adăuga atât subiectului cât și obiectului propoziției (în funcție de scopul nostru) și să exprime ”la fel”. <br />
                <br />
                나도 한국어를 말해  = Și eu vorbesc coreeană<br />

                나는 한국어도 말해  = Vorbesc și coreeană<br />
            </p>
        </div>

        <div class="additional-container2">
            <h2>CONJUGAREA VERBELOR</h2>
            <small>​Voi nota gradele de respect cu 1,2 și 3 de la cea mai informală până la cea formală.</small>
            <br /><br />
            <h3>Stilul ”jurnal”</h3>
            <br />
            <p>Stilul ”jurnal” este numit așa deoarece se folosește majoritar în scris, pentru articole, cărți sau alte scrieri. Acestea sunt regulile pentru verbe:</p>
            <br /><br />
            <table>
                <tr>
                    <td colspan="3">
                        <b><i>VERBE</i></b>
                    </td>

                </tr>
                <tr>
                    <td>
                        <b>Prezent</b>
                    </td>
                    <td>
                        <b>Trecut</b>
                    </td>
                    <td>
                        <b>Viitor</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        eliminăm 다 și adăugăm 는다/ㄴ다. <br />

                        나는 한국어를 배운다 = Eu învăț coreeană<br />
                        나는 집에 간다 = Eu merg acasă<br />

                        그 선생님은 아름답다 = Acea profesoară este frumoasă<br />
                        그 길은 길다 = Acea stradă e lungă<br />
                    </td>
                    <td>
                        eliminăm 다 și adăugăm 았다/었다. *<br />

                        나는 밥을 먹었다 = Am mâncat (orez)<br />
                        나는 창문을 열었다 = Am deschis geamul<br />
                        나는 한국어를 공부했다 = Am studiat coreeană<br />

                        이것은 비쌌다 = Acest lucru a fost scump<br />
                        그 남자는 잘생겼다 = Acel bărbat a fost atractiv.<br />
                    </td>
                    <td>
                        eliminăm 다 și adăugăm 겠다.<br />


                        나는 먹겠다 = Voi mânca<br />

                        나는 배고프겠다 = Îmi va fi foame<br />

                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <b><i>ADVERBE</i></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Prezent</b>
                    </td>
                    <td>
                        <b>Trecut</b>
                    </td>
                    <td>
                        <b>Viitor</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        grad 1: eliminăm 다 și adăugăm 아/어/여.<br />
                        grad 2: eliminăm 다 și adăugăm ​아요/어요/여요.<br />
                        grad 3: ​eliminăm 다 și adăugăm ㅂ니다/습니다 <br />

                        나는 항상 저녁에 음식을 먹어 = Mereu mănânc la amiază<br />
                        저는 항상 저녁에 음식을 먹어요 = ​Mereu mănânc la amiază<br />
                        저는 항상 저녁에 음식을 먹습니다 = ​Mereu mănânc la amiază <br />
                    </td>
                    <td>
                        grad 1: eliminăm 다 și adăugăm 았어/었어/였어.<br />
                        grad 2: eliminăm 다 și adăugăm ​​았어요/었어요/였어요.<br />
                        grad 3: ​eliminăm 다 și adăugăm 았/었/였 +습니다.<br />

                        나는 들어봤어 = Am ascultat<br />
                        저는 들어봤어요 = ​Am ascultat<br />
                        저는 들어봤습니다 = ​Am ascultat<br />
                    </td>
                    <td>
                        grad 1: eliminăm 다 și adăugăm 겠어.<br />
                        grad 2: eliminăm 다 și adăugăm ​​겠어요.<br />
                        grad 3: ​eliminăm 다 și adăugăm ​겠습니다.<br />

                        나는 배우겠어 = Voi învăța<br />
                        저는 배우겠어요 = ​Voi învăța<br />
                        저는 배우겠습니다 = ​Voi învăța<br />
                    </td>
                </tr>
            </table>
            <br />
            <p>
                * dacă ultima vocală este 아/오 se adaugă ​았다; dacă se termină în 하  atunci adăugăm 였다; altfel se adaugă 었다
                <br />
                Regulile care se aplică pe adjective diferă doar la prezent.
            </p>

            <h2>Altă formă pentru viitor</h2>
            <br />
            <p>
                O metodă mult mai naturală de a conjuga un verb la viitor este prin adăugarea sufixului ㄹ/~을, urmat de cuvântul 것 și verbul 이다 conjugat la prezent. De multe ori litera ㅅ este eliminată pentru a ușura pronunția.<br />
                <br />
                는 내일 친구를 만날 것이야 = Mă voi întâlni cu prietenul meu mâine<br />
                나는 내일 친구를 만날 거야 =​Mă voi întâlni cu prietenul meu mâine
            </p>
            <br />
        </div>
        <br /><br /><br /><br />
        <div class="additional-container">
            <h2>Neregulate</h2>
            <br />
            <table>
                <tr>
                    <td style="color:mediumpurple">
                        <B>ㅅ</B>
                    </td>
                    <td style="color:mediumpurple"><B>ㄷ</B></td>
                    <td style="color:mediumpurple"><B>ㅂ</B></td>
                </tr>
                <tr>
                    <td>
                        Aflat pe ultima poziție și urmat de o vocală => se elimină.
                        <br /><br />
                        excepții: 웃다, 벗다, 씻다
                        <br /><br />
                        나는 집을 지어 = Construiesc o casă<br />
                        저는 집을 지었어요 = Am constuit o casă
                    </td>
                    <td>
                        Urmat de o vocală, în conjugare, se transformă în ”ㄹ” (Valabil doar pentru verbe).
                        <br /><br />
                        돈을 받았어요 = Am primit bani
                    </td>
                    <td>
                        Majoritar pentru adjective, se schimbă cu 우.
                        <br /><br />
                        그 여자는 귀여워요 = Acea fată este drăguță<br />
                        나는 큰 사과를 좋아한다 = Îmi plac merele mari
                    </td>
                </tr>
                <tr>
                    <td style="color:mediumpurple">
                        <B>​ㅡ</B>
                    </td>
                    <td style="color:mediumpurple">
                        <B>​르</B>
                    </td>
                    <td style="color:mediumpurple">
                        <B>​​ㄹ</B>
                    </td>
                </tr>
                <tr>
                    <td>
                        În funcție de ultima vocală din silaba anterioară va trerbui să alegi între 어/아.
                        <br /><br />
                        저는 바빠요 = Sunt ocupată<br />
                        그 여자는 예뻐요 = Acea femeie este frumoasă<br>
                        저는 쥐를 들었어요 = Am auzit un șoarece
                    </td>
                    <td>
                        Se adaugă încă un ㄹsilabei precedente,  ​ㅡ este eliminat și cel de-al doilea ㄹ se leagă de 아/어
                        <BR /><br />
                        그것은 달라요 = Acel lucru este diferit<BR>
                        저는 저의 누나를 불렀어요 = Mi-am sunat sora
                    </td>
                    <td>
                        Litera va fi eliminată și înlocuită cu ㄴ(/은), ㄴ(/는), ​ㅂ(/습), ㄹ(/을).
                        <br /><BR>
                        저는 긴 거리를 건넜어요 = Am traversat strada cea lungă<br>
                        저는 먼 병원에 갔어요 = Am mers la un spital îndepărtat
                    </td>
                </tr>
            </table>
            <br />
            <br />
        </div>


        <div class="additional-container2">
            <h3>Adjectiv -> Adverb</h3>
            <br />
            <p>
                De cele mai multe ori tot ce trebuie modificat este înlocuirea lui 다 cu 게. Totuși, dacă adjectivul se termină în 하다 atunci schimbarea se va face cu 히.<br /><br />


                저는 많은 밥을 먹었어요 = Am mâncat  mult (orez)<br />
                저는 밥을 많이 먹었어요 = ​Am mâncat  mult (orez)<br>
                저는 바로 떠났어요 = Am plecat imediat<br>
                저는 매우 빨리 달렸어요 = Am fugit foarte repede<br>
            </p>
            <br /><br /><br />
            <h3>Cum formăm propoziții negative?</h3>
            <br />
            <p>
                1. Adăugăm 안 chiar înaintea verbului terminal.<br />
                2. Adăugăm 지 않다 după verbul terminal.<br /><br />
                Dacă verbul se termină în 하다,el se poate despărți în substantiv și verbul 하다, cel care va fi ulterior conjugat.<br>
                아니다 înseamnă ”a nu fi” și sunt valabile aceleași reguli ca și pentru forma sa pozitivă. Dar trebuie folosite sufixele 이/가.<br>
                없다 = ”a nu avea”.<br>
                싫다/싫어하다 au aceeași semnificație (”a displăcea”), doar că unul este verb și celălalt adjectiv. Așadar 싫다 cere folosirera sufixelor 이/가. De asemenea, 싫어하다 este format din 싫다 (conjugat) + 하다.<br>
                <br><br />
                저는 과일을 싫어해요 = Îmi displac fructele <br>
                저는 과일이 싫어요 = ​Îmi displac fructele
            </p>
            <br /><br />
            <h3>좋다 vs 좋아하다</h3>
            <p>
                좋다 este un adjectiv care înseamnă ”bun”. Așadar el nu poate lucra pe obiecte.De asemenea, această formă infinitivă este gramatical corectă, chiar  dacă el nu este comjugat.  좋아하다 este un verb, derivat de la 좋다 care permite folosirea obiectelor. 좋아하다 se formează din 좋다 + verbul 하다 (a face).<br />
                <br />
                그 선생님은 좋다 = Acel profesor este bun<br />

                나는 그 선생님을 좋아해  = Îmi place acel profesor<br /><br />

                <b>OBS:</b> Toate verbele și adjectivele se termină în 다. Cele care au la sfarsit verbul a face (하다), au origine chinezească. Prin eliminarea ultimelor două silabe se obțiine substantivul de la care provenea acel verb/adjectiv. 
            </p>
            <br />
    <br />
    <br />
    <br />
     <div class="additional-container2">
       
<?php include 'database.php'; ?>

            </div>
        </div>
    </div>
    <br />
    <br />

</body>
</html>