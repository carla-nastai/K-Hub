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
    <link rel="stylesheet" href="vocabular.css" />
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
    </div>

    <div class="bd">


        <div class="container">
            <img src="img/vocab.jpg" alt="Picture">
            <div class="title">Vocabular</div>
        </div>


        <br />
        <br />

        <div class="additional-container">

            <h3>Numere</h3>
            <br />
            <br />
            <p>
                În limba coreeană există două seturi de numere, sino-coreene și native.
                Pentru fiecare există diferite momente în care se folosesc. Dar momentan începeți prin a le memora.
                Până la 100 avem ambele tipuri, dar după aceea toate sunt preluate din limba chineză (sino-coreene), deși mulți nu le mai folosesc o dată ce trec de 50-60.
                Studiați următorul tabel cu numere. 11/12/.. și 200/300/... se formează prin alipirea numeralului 10/100 cu 2/3/... .
            </p>
            <br /><br />
            <table>

                <tr>
                    <td>
                        <button class="button" onclick="playAudio('audio1')">
                            1
                        </button>
                        <audio id="audio1">
                            <source src="audio\1.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            = 일/하나 
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio2')">
                            2
                        </button>
                        <audio id="audio2">
                            <source src="audio\2.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            =이/둘
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio3')">
                            3
                        </button>
                        <audio id="audio3">
                            <source src="audio\3.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            =삼/셋

                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio4')">
                            ​4
                        </button>
                        <audio id="audio4">
                            <source src="audio\4.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            =사/넷

                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio5')">
                            ​5
                        </button>
                        <audio id="audio5">
                            <source src="audio\5.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            =오/다섯
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio6')">
                            ​​6
                        </button>
                        <audio id="audio6">
                            <source src="audio\6.mp3" type="audio/mpeg">
                        </audio><br />
                        <p>
                            =육 /여섯 

                        </p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <button class="button" onclick="playAudio('audio7')">
                            7
                        </button>
                        <audio id="audio7">
                            <source src="audio\7.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            =​칠/일곱
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio8')">
                            8
                        </button>
                        <audio id="audio8">
                            <source src="audio\8.mp3" type="audio/mpeg">
                        </audio><br />
                        <p>
                            =​팔/여덟
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio9')">
                            9
                        </button>
                        <audio id="audio9">
                            <source src="audio\9.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            =​구/아홉
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio10')">
                            ​​10
                        </button>
                        <audio id="audio10">
                            <source src="audio\10.mp3" type="audio/mpeg">
                        </audio> <br />
                        <p>
                            =​십/열
                        </p>
                    </td>
                    <td>
                        <p>
                            ​11
                        </p>
                        <br />
                        <p>
                            =​십일/
                            열하나

                        </p>
                    </td>
                    <td>
                        <p>
                            ​​​12
                        </p>
                        <br />
                        <p>
                            = 십이/ 열둘

                        </p>
                    </td>


                </tr>
                <tr>
                    <td>
                        <p>
                            ​​​13
                        </p>
                        <br />
                        <p>
                            =​십삼/열셋

                        </p>
                    </td>

                    <td>
                        <p>
                            ​​​14
                        </p>
                        <br />
                        <p>
                            =​십사/열넷

                        </p>
                    </td>
                    <td>
                        <p>
                            ​​​15
                        </p>
                        <br>
                        <p>
                            =​십사/열넷

                        </p>
                    </td>

                    <td>
                        <p>
                            ​​​16
                        </p>
                        <br>
                        <p>
                            =​십육/
                            열여섯


                        </p>
                    </td>
                    <td>
                        <p>
                            ​​​17
                        </p>
                        <br />
                        <p>
                            =​​십칠/
                            열일곱

                        </p>
                    </td>
                    <td>
                        <p>
                            ​​​18
                        </p>
                        <br>
                        <p>
                            =​십팔/
                            열여덟

                        </p>
                    </td>
                </tr>
                <tr>


                    <td>
                        <p>
                            ​​​19
                        </p>
                        <br>
                        <p>
                            =​​십구/
                            열아홉
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio20')">
                            ​​​20
                        </button> <br />
                        <audio id="audio20">
                            <source src="audio\20.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =​​이십/스물


                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio30')">
                            ​​​30
                        </button> <br />
                        <audio id="audio30">
                            <source src="audio\30.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =​​삼십/서른

                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio40')">
                            ​​​40
                        </button> <br />
                        <audio id="audio40">
                            <source src="audio\40.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =​사십/마흔

                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio50')">
                            ​​​50
                        </button> <br />
                        <audio id="audio50">
                            <source src="audio\50.mp3" type="audio/mpeg">
                        </audio>
                        <p>
                            =​오십/쉰

                        </p>
                    </td>
                    <td>
                        <p>
                            ​​​60
                        </p>
                        <br />
                        <p>
                            =​육십/예순
                        </p>
                    </td>
                </tr>
                <tr>


                    <td>
                        <p>
                            ​​​70
                        </p>
                        <br>
                        <p>
                            =​칠십/일흔

                        </p>
                    </td>
                    <td>
                        <p>
                            ​​​80
                        </p>
                        <br>
                        <p>
                            =​팔십/여든

                        </p>
                    </td>
                    <td>
                        <p>
                            ​​​90
                        </p>
                        <br>
                        <p>
                            =구십/아흔

                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio100')">
                            ​​​100
                        </button>
                        <audio id="audio100">
                            <source src="audio\100.mp3" type="audio/mpeg">
                        </audio>
                        <br />
                        <p>
                            =백

                        </p>
                    </td>
                    <td>
                        <p>
                            200
                        </p>

                        <br>
                        <p>
                            =​이백
                        </p>
                    </td>
                    <td>
                        <button class="button" onclick="playAudio('audio1000')">
                            ​​​1000
                        </button>
                        <audio id="audio1000">
                            <source src="audio\1000.mp3" type="audio/mpeg">
                        </audio>
                        <br>
                        <p>
                            =​​천

                        </p>
                    </td>
                </tr>
            </table>
            <br />
            <br />
        </div>
        <br /><br />
        <div class="additional-container2">
            <br />
            <br />

            <h3>Când folosim numerele sino-coreene?​</h3>
            <br />
            <br />
            <p>
                Câteva din cazurile în care avem nevoie specific de acest set sunt:
            </p>
            <ul>
                <li>
                    Când număram sau lucrăm cu banii
                </li>
                <li>
                    Când măsurăm
                </li>
                <li>
                    În numerele de telefon
                </li>
                <li>
                    Pentru a face calcule
                </li>
                <li>
                    Pentru a număra lunile anului (există o metodă de a le număra și cu ajutorul numerelor native, dar momentan nu ne axăm pe asta)
                </li>
                <li>
                    Când vorbim despre timp (doar când vine vorba despre minute și secunde)
                </li>
                <li>
                    Participă la formarea numelui lunilor anului
                </li>
            </ul>
            <br />
            <h3>Numerele nativ coreene se folosesc...</h3>


            <ul>
                <li>Când numeri persone, obiecte sau acțiuni</li>
                <li>Când te referi le timp (mai exact, la oră)</li>
                <li>Uneori pentru luni</li>
            </ul>

            <br />
            <h3>Contoare</h3>
            <p>
                Există mai multe contoare, pentru diferite lucruri.<br />
                개 = pentru lucruri<br />
                명 = pentru oameni<br />
                번 = pentru acțiuni <br /><br />
                <i><b>!</b>Dacă uiți un contor în timpul vorbirii poți să îl înlocuiești cu 개.</i><br />
                <br />Numerele 1,2,3 și 20 își schimbă forma în momentul în care punem un contor după ele:<br />
                1 = 하나 -> 한<br />
                2 = 둘 -> 두<br />
                3 = 셋 -> 세<br />
                4 = 넷 -> 네<br />
                20 = 스물 -> 스무<br />
                <br /> <br />
                Câteva exemple:<br />
                ​사람 두 명  = 2 oameni<br />
                ​사람 한 명 = 1 persoană<br />
                ​펜 마흔네 개  = 44 de pixuri<br /><br />
                Dacă dorim să punem numeralul după contor atunci trebuie să folosim prefixul "의". Ex:<br />
                ​한 명의 사람  = 1 persoană<br />
                ​두 명의 사람  = 2 persoane<br />
                ​마흔네 개의 펜  = 44 pixuri<br />
                <br /><br />
                번  este un contor folosit pentru acțiuni. Împreună cu un număr el se va transforma într-un adverb care ne ajută să exprimăm de câte ori o acțiune a fost repetată. Fiind adverb 을/를  nu se atașează.<br />
                <br /> ​저는 어제 학교에 세 번 갔어요  = Ieri am mers la școală de trei ori<br />
                ​저는 그 영화를 다섯 번 봤어요  = Am văzut acel film de 5 ori<br />
                ​저는 오늘 두 번 운동할 것입니다 = Voi face sport de două ori azi<br />
                <br /><br /><br /><br />
            </p>
            <h3>Cum exprimăm timpul?</h3>
            <p>
                Pentru a specifica o oră (de ex. ”Este ora două”) se folosește prefixul 시 după un număr. Pentru a specifica și minutele se adaugă 분. Ex:<br />
                ​2시 30분 = 2:30<br /><br />
                În propoziții ora va fi urmată de sufixul 에. <br />
                ​나는 5시에 먹을 거야 = Voi mânca la ora 5:00<br />
                ​나는 2시 30분에 왔어  = Am venit la 2:30<br />
                ​우리는 야구를 1시에 할 거예요 = Vom juca baschet la 1:00<br />
            </p>
            <br /><br /><br />
            <h3>Vârsta</h3>
            <p>
                O propoziție foarte importantă pe acest subiect este ”몇 살이에요? (miot sal-i-ie-io) = Câți ani ai?”. Pentru a răspunde vom folosi numărul corespunzător vârstei noastre (din setul sino-coreean) urmat de sufixul ”살”. Ex:<br />
                ​저는 열 살이에요 = Am 10 ani.
            </p>
        </div>

        <br />
        <br />

        <div class="additional-container">
            <br />
            <br />
            <h3>Pronume și persoane</h3>
            <br />
            <br />
            <p>
                <b style="color:rebeccapurple">대명사</b>  = pronume.<br /><br />

                În coreeană există diferite tipuri de pronume, ca și în română, și câte un nume pentru fiecare. De exemplu,  인칭 대명사 (incing demiongsa) înseamnă pronume personale și 비인칭 대명사 (binching demiongsa) sunt cele impersonale. 
                <br /><br />
                Spre deosebire de alte limbi, coreenii nu folosesc pronumele prea des. Le omit, deoarece de multe ori contextul oferă destulă informație despre subiectul propoziției. 
                <br /><br />
                De asemenea, există câte o formă pentru ambele nivele de respect. 
            </p>
            <table>
                <thead>
                <td>
                    Pronume română
                </td>
                <td>Pronume coreeană</td>
                </thead>
                <tr>
                    <td>
                        Eu
                    </td>
                    <td>
                        저  - formal<br />
                        나  - informal
                    </td>
                </tr>
                <tr>
                    <td>
                        Tu
                    </td>
                    <td>
                        너    - informal<br />
                        자네  -informal<br />

                        그대  -formal <br />
                        당신  - forma<br />
                    </td>
                </tr>
                <tr>
                    <td>
                        El<br />
                        Ea
                    </td>
                    <td>
                        그들      <br />
                        그녀들
                    </td>
                </tr>
                <tr>
                    <td>
                        Noi
                    </td>
                    <td>
                        저희    - formal<br />
                        저희들  - formal<br />
                        우리    - informal<br />
                        우리들  - informal<br />
                    </td>
                </tr>
                <tr>
                    <td>
                        Voi
                    </td>
                    <td>
                        너희    - informal<br />
                        너희들  - informal<br />
                        너네    - informal<br />
                        너네들  - informal<br />
                        자네들  - formal<br />
                        그대들  - formal<br />
                        당신들  - formal<br />
                    </td>
                </tr>
                <tr>
                    <td>
                        Ei<br />
                        Ele
                    </td>
                    <td>
                        그들    - formal<br />
                        그녀들  - formal
                    </td>
                </tr>
            </table>
            <br />
            <br />
        </div>
        <br /><br />
        <div class="additional-container2">
            <h3>Al meu, al tău....</h3>
            <p>
                Pronumele posesive se formează foarte ușor. Tot ce trebuie să faci e să adaugi sufixul 의 după fiecare pronume personal. Spre exemplu: 나의 (na-âi) = al meu 
                <br />너의 (no-âi) = al tău<br />
                우리의 (u-ri-âi) = al nostru<br />
                그녀의 (câ-nio-âi) = al ei<br />
                <br /><br />
                Totuși sufixul 의 nu este folosit foarte des pentru persoana I așa ca uneori vei auzi cuvinte precum:
                제 (ce), 네 (ne).
            </p>
            <br /><br /><br /><br />
            <p>
                <b><big>Exemple de propoziții cu pronume:</big></b><br />
                저를 소개합니다.  = Dă-mi voie să mă prezint.<br />
                저는 대학생이에요.  = Sunt student la universitate.<br />
                저를 믿으세요.  = Ai încredere în mine.<br />
                저의 꿈은 의사입니다.  = Visul meu este să devin doctor.<br />
                나의 가족은 4명이야.  = Familia mea are patru persoane.<br />
                우리는 거기 자주 가요.  = Mergem des acolo.<br />
                저희를 도와주실 수 있으시겠어요.  = Poți să ne ajuți?<br />
                그들은 서로 인사했어요.  = Ei s-au salutat între ei.<br />
            </p>
            <br /><br /><br /><br />
            <h3>Despre oameni</h3>
            <table style="align-self:center">
                <tr>
                    <td>
                        아이= copil
                    </td>
                    <td>
                        아들 = fiu
                    </td>
                    <td>
                        딸 = fiică
                    </td>
                    <td>
                        남편 = soț
                    </td>

                </tr>
                <tr>
                    <td>
                        아버지 = tată
                    </td>
                    <td>
                        어머니 = mamă
                    </td>
                    <td>
                        동생 = frate/soră mai mic/ă
                    </td>
                    <td>
                        남동생 = frate mai mic
                    </td>
                </tr>
                <tr>
                    <td>
                        여동생 = soră mai mică
                    </td>
                    <td>
                        형 =frate mai mare (al unui băiat)
                    </td>
                    <td>
                        오빠 = frate mai mare (al unei fete)
                    </td>
                    <td>
                        누나 = soră mai mare (a unui băiat)
                    </td>

                </tr>
                <tr>
                    <td>
                        언니 = soră mai mare (a unei fete)
                    </td>
                    <td>
                        삼촌 = unchi
                    </td>

                    <td>
                        이모 = mătușă (din partea mamei)
                    </td>

                    <td>
                        고모 = ​mătușă (din partea tatălui)
                    </td>
                </tr>
                <tr>
                    <td>
                        사촌 = văr
                    </td>
                    <td>
                        할아버지 = bunic
                    </td>
                    <td>
                        할머니 = bunică
                    </td>
                    <td>
                        아저씨  = (apelativ pentru)<br /> bărbat în vârstă
                    </td>
                </tr>
                <tr>
                    <td>
                        아주머니 = (apelativ pentru)<br /> femeie în vârstă
                    </td>
                    <td>
                        아내 = soție
                    </td>
                    <td>
                        남자 (namja) = bărbat
                    </td>
                    <td>
                        여자 (ioja) = femeie
                    </td>
                </tr>
                <tr>
                    <td>
                        가족 = familie
                    </td>
                    <td>
                        머리 (mo-rii) = cap
                    </td>
                    <td>
                        다리 (da-rii) = picior
                    </td>
                    <td>
                        손가락 (son-ga-rac) = deget
                    </td>
                </tr>
                <tr>
                    <td>
                        귀 (chui) = ureche
                    </td>
                    <td>
                        팔 (pal) = braț
                    </td>
                    <td>
                        손 = hand
                    </td>
                    <td>
                        눈 (nun) = ochi
                    </td>
                </tr>
                <tr>
                    <td>
                        입 (ib) = buze
                    </td>
                    <td>
                        배 (be) = stomac
                    </td>
                    <td>
                        손목 = încheietură
                    </td>
                    <td>
                        눈썹 = sprânceană
                    </td>
                </tr>
                <tr>
                    <td>
                        목 = gât
                    </td>
                    <td>
                        이 = dinți
                    </td>
                    <td>
                        얼굴 = față
                    </td>
                    <td>
                        몸 = corp
                    </td>
                </tr>

            </table>
        </div>
        <br /><br />
        <div class="additional-container">
            <h3>Locuri și ocupații</h3>
            <br /><br />
            <table>
                <tr>
                    <td>
                        선생님 = profesor
                    </td>
                    <td>
                        ​식당 = restaurant
                    </td>
                    <td>
                        의사 = doctor
                    </td>
                </tr>
                <tr>

                    <td>
                        건물 = clădire
                    </td>
                    <td>
                        학생 = student
                    </td>
                    <td>
                        호텔 = hotel
                    </td>
                </tr>

                <tr>
                    <td>
                        교감선생님= director adjunct
                    </td>
                    <td>
                        학교 = școală
                    </td>
                    <td>
                        교장선생님 = ​director
                    </td>
                </tr>
                <tr>

                    <td>
                        은행 = bancă
                    </td>
                    <td>
                        교사 = ​profesor
                    </td>
                    <td>
                        공항 = aeroport
                    </td>
                </tr>

                <tr>
                    <td>
                        반 = clasă de elevi
                    </td>
                    <td>
                        병원 = spital
                    </td>
                    <td>
                        회사원 = angajat al unei companii
                    </td>
                </tr>
                <tr>

                    <td>
                        공원 = parc
                    </td>

                    <td>
                        요리사 = bucătar
                    </td>
                    <td>
                        박물관 = museu
                    </td>
                </tr>
                <tr>
                    <td>
                        운전사 = șofer
                    </td>
                    <td>
                        교실 = sala de clasă
                    </td>
                    <td>
                        점원 = asistent magazin
                    </td>
                </tr>
                <tr>

                    <td>
                        대학교 = universitate
                    </td>
                    <td>
                        배우 = actor

                    </td>
                    <td>
                        고등학교 = liceu
                    </td>
                </tr>

                <tr>
                    <td>
                        회계사 =  contabil
                    </td>
                    <td>
                        도서관 = bibliotecă
                    </td>
                    <td>
                        공장 = fabrică
                    </td>
                </tr>
                <tr>

                    <td>
                        극장 = teatru
                    </td>
                    <td>
                        회사 = companie
                    </td>
                    <td>
                        시장 = piață
                    </td>
                </tr>

            </table>
            <br /><br /><br />
            <h1>Exemple și propoziții folositoare</h1>
            <br />
            <table>
                <tr>
                    <td> ​학생들은 교실에 들어갔어요 = Elevi au mers clasă</td>
                </tr>
                <tr>
                    <td> 저는 영어교사예요 = Sunt profesor de engleză</td>
                </tr>
                <tr>
                    <td>몇 반이에요? = În ce clasă este?</td>
                </tr>
                <tr>
                    <td> 저는 이 사과를 시장에서 샀어요 = Am cumpărat merele acestea din piață</td>
                </tr>
                <tr>
                    <td> 배우들은 그들의 영화를 보통 좋아하지 않아  = Actorilor de obicei nu le plac filmele lor</td>
                </tr>
                <tr>
                    <td>우리 회사는 새로운 회사원을 찾고 있어요  = Compania noastră caută noi angajați</td>
                </tr>
                <tr>
                    <td>요리사들은 음식을 준비해요 = Bucătarii au pregătit mâncarea</td>
                </tr>
                <tr>
                    <td>버스운전사는 승객들을 버스에 서울역에서 태웠어요 = Șoferul de autobus a luat călători din stația Seul</td>
                </tr>
                <tr>
                    <td>저는 큰 공장에서 일해요 = Lucrez într-o fabrica mare</td>
                </tr>
                <tr>
                    <td> 대학로 근처에 극장이 많아요  = Sunt multe teatre pe lângă 대학로</td>
                </tr>
                <tr>
                    <td> 내가 회사에 가지 않은 날에 병원에 갔어  = În ziua în care nu am fost la muncă am mers la spital</td>
                </tr>
                <tr>
                    <td> 나는 개인적 문제로 회사를 그만두었다 = Mi-am dat demisia de l companie din motive personale</td>
                </tr>
                <tr>
                    <td>저는 일을 구하려고 그 회사에 이력서를 냈어요   = Mi-am trimis CV-ul acelei companii cu intenția de a aplica pentru job</td>
                </tr>
                <tr>
                    <td> 저의 친구는 의사예요  = Prietenul meu e doctor
                </tr>
                <tr>
                    <td>저는 정신과의사가 되려고 열심히 공부하고 있어요 = Învâț din greu pentru a deveni psihiatru</td>
                </tr>
                <tr>
                    <td>저는 좋은 학생이에요  = Sunt student bun</td>
                </tr>
                <tr>
                    <td>식당은 은행 옆에 있어요 = Restaurantul este lângă bancă</td>
                </tr>
                <tr>
                    <td>건물을 지나가서 오른 쪽으로 가세요  = Treci de acea clădire apoi faci dreapta</td>
                </tr>
                <tr>
                    <td>저는 3일 동안 학교에 안 갔어요 = Nu am mers la școală 3 zile</td>
                </tr>
                <tr>
                    <td>친구가 오기 전에 저는 은행에 갔어요 = Înainte să vină prietenul meu am fost la bancă</td>
                </tr>
                <tr>
                    <td>저는 인천공항에서 출발했어요  = Am plecat de la aeroportul din Incheon</td>
                </tr>
                <tr>
                    <td>엄마가 어디에 있어요? 병원에 갔어요? = Unde e mama? A mers la spital?</td>
                </tr>
                <tr>
                    <td>일요일이어서 저는 공원에 가고 싶어요 = E duminică așa că vreau să merg în parc</td>
                </tr>
                <tr>
                    <td> 우리 교장선생님은 영어를 할 수 있습니다  = Directorul nostru poate vorbi engleză</td>
                </tr>
                <tr>
                    <td>어느 대학교를 다녀요?  = La ce universitate mergi?</td>
                </tr>
                <tr>
                    <td>저는 서울대학교를 다녀요 = Merg (studiez) la universitatea din Seul</td>
                </tr>
                <tr>
                    <td>어느 대학교를 졸업했어요?  = Ce universitate ai absolvit?</td>
                </tr>
                <tr>
                    <td>저는 10년 전에 서울대학교를 졸업했어요 = Am absolvit universitatea din Seul acum 10 ani</td>
                </tr>
                <tr>
                    <td> 중학교 또는 고등학교를 다녀요?= Ești la gimnaziu sau la liceu?</td>
                </tr>
                <tr>
                    <td>저는 고등학교를 다니고 있어요 = Eu merg la liceu</td>
                </tr>
                <tr>
                    <td> 내일 도서관에 갈까? = Ar trebui să mergem la bibliotecă mâine?</td>
                </tr>
            </table>
            <br />
        </div>
        <br /><br /><br />
        <div class="additional-container">
            <h3>Verbe și adverbe</h3>
            <br /><br />
            <table>
                <thead>
                <td colspan="2">
                    <b>Verbe</b>
                </td>
                <td>
                    <b>Adjective</b>
                </td>
                </thead>
                <tr>
                    <td>
                        있다 = a fi undeva/a avea ceva
                    </td>
                    <td>
                        먹다 =a mânca
                    </td>
                    <td>
                        이다 = a fi
                    </td>

                </tr>
                <tr>
                    <td>
                        가다 =a merge
                    </td>
                    <td>
                        닫다 = a închide
                    </td>
                    <td>
                        아름답다 = a fi frumos
                    </td>

                </tr>
                <tr>
                    <td>
                        열다 =a deschide
                    </td>
                    <td>
                        하다 =a face
                    </td>
                    <td>
                        좋다 = ​a fi bun
                    </td>

                </tr>
                <tr>
                    <td>
                        좋아하다 = a plăcea
                    </td>
                    <td>
                        오다 = a veni
                    </td>
                    <td>
                        위험하다 = ​a fi periculos
                    </td>

                </tr>
                <tr>
                    <td>
                        걷다 = a merge
                    </td>
                    <td>
                        알다 = a ști
                    </td>
                    <td>
                        맛있다 = ​a fi delicios
                    </td>

                </tr>
                <tr>
                    <td>
                        공부하다 = a studia
                    </td>
                    <td>
                        배우다 = a învăța
                    </td>
                    <td>
                        재미있다 = ​a fi distractiv, amuzant
                    </td>

                </tr>
                <tr>
                    <td>
                        싫어하다 = a displăcea
                    </td>
                    <td>
                        자다 = a dormi
                    </td>
                    <td>
                        행복하다 = ​a fi fericit
                    </td>

                </tr>
                <tr>
                    <td>
                        듣다 = a auzi
                    </td>
                    <td>
                        보다 = a vedea
                    </td>
                    <td>
                        바쁘다 = a fi ocupat
                    </td>

                </tr>
                <tr>
                    <td>
                        들어보다 = a asculta
                    </td>
                    <td>
                        찾다 = a căuta/găsi
                    </td>
                    <td>
                        빠르다 = ​a fi rapid
                    </td>

                </tr>
                <tr>
                    <td>
                        가지다 = a avea (în posesie)
                    </td>
                    <td>
                        잊다 = a uita
                    </td>
                    <td>
                        배고프다 = ​a fi înfometat
                    </td>

                </tr>
                <tr>
                    <td>
                        돕다 = a ajuta
                    </td>
                    <td>
                        주다 = a da
                    </td>
                    <td>
                        착하다 = ​a fi politicos
                    </td>

                </tr>
                <tr>
                    <td>
                        쓰다 = a folosi/a scrie
                    </td>
                    <td>
                        읽다 = a citi
                    </td>
                    <td>
                        쉽다 = ​a fi ușor
                    </td>

                </tr>
                <tr>
                    <td>
                        실수하다 = a face o greșală
                    </td>

                    <td>
                        수리하다 = a repara
                    </td>
                    <td>
                        어렵다 = dificil
                    </td>

                </tr>
                <tr>
                    <td>
                        젊다 = a fi tânăr
                    </td>
                    <td>
                        늙다 =  a fi bătrân
                    </td>
                    <td>
                        맞다 = ​a fi corect
                    </td>

                </tr>

            </table>
            <br />
        </div>
        <br /><br />
        <div class="additional-container">
            <br />
            <h3>Expresii și cuvinte folositoare</h3>
            <br /><br />
            <table>
                <tr>
                    <td rowspan="2">
                        <b>​Zilele săptămânii:</b><br />
                        월요일 = Luni<br />
                        화요일 = Marți<br />
                        수요일 = Miercuri<br />
                        목요일 = Joi<br />
                        금요일 = Vineri<br />
                        토요일 = Sâmbătă<br />
                        일요일 = Duminică<br />
                    </td>
                    <td>
                        ​<b>Puncte cardinale:</b><br />
                        동= Est<br />
                        남 = Sud<br />
                        서 = Vest<br />
                        북 = Nord<br />
                    </td>
                    <td>
                        <b>Momente ale zilei:</b><br />
                        오전 = dimineață<br />
                        오후 = după-amiază<br />
                        저녁 = ora cinei<br />
                        점심 = ora prânzului<br />
                        밤 = noapte<br />
                        낮 = zi<br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Adverbe de loc:</b><br />
                        안 = inăuntru<br />
                        위 = deasupra<br />
                        밑 = dedesupt<br />
                        옆 = lângă<br />
                        뒤 = în spate<br />
                        앞 = în față<br />
                        여기 = aici<br />
                    </td>
                    <td>
                        <b>Anotimpuri:</b><br />
                        여름 = vară<br />
                        가을 = toamnă<br />
                        겨울 = iarnă<br />
                        봄 = primăvară<br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Lunile anului: </b><br />
                        1월 (일월)= Ianuarie<br />
                        2월 (이월) = Februarie<br />
                        3월 (삼월) = Martie<br />
                        4월 (사월) = Aprilie<br />
                        5월 (오월) = Mai<br />
                        6월 (유월) = Iunie<br />
                        7월 (칠월) = Iulie<br />
                        8월 (팔월) = August<br />
                        9월 (구월) = Septembrie<br />
                        10월 (시월) = Octombrie<br />
                        11월 (십일월) = Noiembrie<br />
                        12월 (십이월) = Decembrie<br />
                    </td>
                    <td>
                        ​이 = asta<br />
                        그 = aia<br />
                        저 = aia (când e foarte departe)<br />
                        것 = lucru<br />
                        의자 = scaun<br />
                        탁자 = masă<br />
                        침대 = pat<br />
                        소파 = canapea<br />
                        문 = ușă<br />
                        창문 = fereastră<br />
                        냉장고 = frigider<br />
                        전화기 = telefon<br />
                        컴퓨터 = computer<br />
                        음식 = mâncare<br />
                        집 = casă<br />
                    </td>
                    <td>

                        차 = mașină<br />
                        지하철 = metrou<br />
                        나라 = țară<br />
                        외국 =  țară străină<br />
                        외국인 = străin<br />
                        길 = stradă<br />
                        돈 = bani<br />
                        비 = ploaie<br />
                        나이 = vârstă<br />
                        여권 = pașaport<br />
                        약 = medicament<br />
                        시장 = market<br />
                        삶 = viață<br />

                        네 = da<br />
                        아니 = nu<br />
                    </td>
                </tr>
            </table>
            <br /><br /><br /><br />
            <table>
                <thead>
                <td colspan="2"><big><b>Propoziții</b></big></td>
                </thead>
                <tr>
                <tr>
                    <td>안녕하세요 = Bună</td>
                    <td>고맙습니다 = Mulțumesc</td>
                </tr>
                <tr>
                    <td>천만에요  = Cu plăcere </td>
                    <td>실례합니다 = Îmi scer scuze </td>
                </tr>
                <tr>
                    <td>괜찮아요 = ok</td>
                    <td>몰라요 = Nu știu</td>
                </tr>
                <tr>
                    <td>미안합니다  = Îmi pare rău</td>
                    <td>안녕히 가세요 = La revedere</td>
                </tr>
                <tr>
                    <td> 저기요 = Scuze (pentru a atrage atenția)</td>
                    <td>실례합니다 = Scuze (pentru a cere iertare)</td>
                </tr>
                <tr>
                    <td>잠시만요 =  Scuze (pentru a trece de cineva)</td>
                    <td>여보세요 = Bună (la telefon)</td>
                </tr>
                <tr>
                    <td>잘 자요 = Somn ușor</td>
                    <td>안녕히 가세요 = La revedere (către cel care pleacă) </td>
                </tr>
                <tr>
                    <td>안녕히 계세요 = La revedere (​către cel care stă) </td>
                    <td>잘 가요 = Drum bun</td>
                </tr>
                <tr>
                    <td>좋은 하루 보내세요 = O zi bună </td>
                    <td>여행 잘하세요 = Vacanță plăcută</td>
                </tr>
                <tr>
                    <td>화장실은 어디에 있어요? =   Unde este baia?</td>
                    <td>다시 말해 주세요 = Te rog repetă</td>
                </tr>
                <tr>
                    <td>천천히 말해 주세요   =   Vorbește mai rar, te rog </td>
                    <td>적어 주세요  = Scrie, te rog</td>
                </tr>
                <tr>
                    <td>이해해요  = Înțeleg</td>
                    <td>이해 못해요 = Nu înțeleg </td>
                </tr>
                <tr>
                    <td>몰라요 = Nu știu</td>
                    <td> 알아요 = ​Știu</td>
                </tr>
                <tr>
                    <td>한국말을 할 수 있어요?  =Poți vorbi coreeană?</td>
                    <td>한국말을 조금 할 수 있어요  = Pot vorbi puțin în coreeană</td>
                </tr>
                <tr>
                    <td>한국말을 못해요 = Nu pot vorbi coreeană</td>
                    <td>이거 얼마예요? = Cât costă?</td>
                </tr>
                <tr>
                    <td>금방 갔다 올거예요! = Mă întorc imediat!</td>
                    <td>이게 뭐예요 = Ce este asta?</td>
                </tr>
                <tr>
                    <td>걱정 하지 마세요! = Nu îți face griji !</td>
                    <td>문제 없어요 = Nicio problemă!</td>
                </tr>
                <tr>
                    <td>만나서 반갑습니다 =  Încântat/ă de cunoștiință!</td>
                    <td>이름이 뭐예요?= Cum te numești?</td>
                </tr>
                <tr>
                    <td>몇 살이에요? = Câți ani ai?</td>
                    <td>어디 출신이세요? = De unde ești?</td>
                </tr>
                <tr>
                    <td>어디에서 일해요? = Unde lucrezi?</td>
                    <td>영어 할 수 있습니까? = Poți vorbi engleză?</td>
                </tr>
                </tr>
            </table>
            <br /><br />
        </div>
    </div>

</body>
</html>