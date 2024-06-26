﻿

<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="home.css" />
    <script src="home.js"></script>
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
    <table>

        <tr>

            <td>


                <div class="container">
                    <div class="overlay-picture">
                        <div class="overlay"></div>
                        <div class="title">K-now</div>
                    </div>
                    <div class="content">
                        <p>
                            ​K(orean)-now este un site care te ajută să îți pui bazele când vine vorba de limba coreeană.
                            Acest website poate fi punctul tău de pornire pentru a-ți deschide orizontul spre această limbă asiatică.
                            Vei găsi aici câteva lecții de vocabular, gramatică și o mică introducere în istoria țării.
                            Nu fi timid și continuă să explorezi link-urile atașate după ce ai parcurs lecțiile noastre.
                        </p>
                        <a href="login.php">I want to k-now </a> <br>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <br /><br /><br /><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="additional-container">
                    <br /><br /><br /><br /><br /><br />
                    <table class="table">
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <tr>
                            <td>
                                <div class="icon-container">
                                    <img src="img\icon1.jpg" alt="Settings Icon">
                                </div>
                                <h3>Hangul</h3>
                                <p><i>Primul pas este aici. <br /> Învață alfabetul și pronunția.</i></p>
                                <a href="hangul.php">MORE</a>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <div class="icon-container">
                                    <img src="img\icon2.jpg" alt="Profile Icon">
                                </div>
                                <h3>Vocabular</h3>
                                <p><i>Primele tale cuvinte! Din nou.<br /> Aici vei găsi câteva cuvinte și expresii de bază.</p>
                                <a href="vocabular.php">MORE</a>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <div class="icon-container">
                                    <img src="img\icon3.jpg" alt="Messages Icon">
                                </div>
                                <h3>Gramatică</h3>
                                <p><i>Noțiuni simple de gramatică pentru a <br /> putea forma propoziții și a purta o conversație.</i></p>
                                <a href="gramatica.php">MORE</a>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        </tr>
                    </table>
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                    <div class="image-container">
                        <img src="img\homehan.jpg" alt="Profile Image">
                    </div>
                    <br>
                    <h5 style="color: gray">K-NOW ABOUT KOREAN NOW</h5>
                    <h1>Vrei să ști câte ceva despre istoria țării și a limbii? <br />Descoperă informații captivante și documentează-te înainte de a începe studiul intens.</h1>
                    <br /><br />
                    <a style="display: inline-block; width: 100px; height: 60px; color: white; background-color: mediumpurple; border: none; text-decoration: none; display: flex; justify-content: center; align-items: center; " onclick="style: background-color: darkpurple;" href="istorie.php">MORE</a>
                    <br /><br /><br /><br /><br />
                </div>

            </td>
        </tr>
    </table>

</body>
</html>