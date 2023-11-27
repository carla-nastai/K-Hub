

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
        <a href="#">Vocabular</a>
        <a href="#">Gramatică</a>
        <a href="#">Istorie</a>

    </div>
    <table>

        <tr>

            <td>


                <div class="container">
                    <div class="overlay-picture">
                        <div class="overlay"></div>
                        <div class="title">K-hub</div>
                    </div>
                    <div class="content">
                        <p>
                            ​K(orean)-hub este un site care te ajută să îți pui bazele când vine vorba de limba si cultura coreeană.
                            Acest website poate fi punctul tău de pornire pentru a-ți deschide orizontul spre această limbă asiatică.
                            Vei găsi aici câteva lecții de vocabular, gramatică și o mică introducere în istoria țării.
                            Nu fi timid și continuă să explorezi link-urile atașate după ce ai parcurs lecțiile noastre.
                        </p>
                        <a href="login.php">I want to start now </a> <br>
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
                       
                        <tr>
                            <td>
                                <div class="icon-container">
                                    <img src="img\icon1.png" alt="hangul Icon" width="100" height="100">
                                </div>
                                <h3>Hangul</h3>
                                <p><i>Primul pas este aici. <br /> Învață alfabetul și pronunția.</i></p>
                                <a href="hangul.php">MORE</a>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <div class="icon-container">
                                    <img src="img\icon3.png" alt="vocab Icon" width="100" height="100">
                                </div>
                                <h3>Vocabular</h3>
                                <p><i>Primele tale cuvinte! Din nou.<br /> Aici vei găsi câteva cuvinte și expresii de bază.</p></i>
                                <a href="#">MORE</a>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <div class="icon-container">
                                    <img src="img\icon2.png" alt="gramatica Icon" width="100" height="100">
                                </div>
                                <h3>Gramatică</h3>
                                <p><i>Noțiuni simple de gramatică pentru a <br /> putea forma propoziții și a purta o conversație.</i></p>
                                <a href="#">MORE</a>
                            </td>
                                                    </tr>
                    </table>
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                    <div class="image-container">
                        <img src="img\homehan.jpg" alt="Profile Image">
                    </div>
                    <br>
                    <h5 style="color: darkred">K-NOW ABOUT KOREAN NOW</h5>
                    <h1>Vrei să ști câte ceva despre istoria țării și a limbii? <br />Descoperă informații captivante și documentează-te înainte de a începe studiul intens.</h1>
                    <br /><br />
                    <a style="display: inline-block; width: 100px; height: 60px; color: white; background-color: black; border: none; text-decoration: none; display: flex; justify-content: center; align-items: center; " onclick="style: background-color: darkred;" href="#">MORE</a>
                    <br /><br /><br /><br /><br />
                </div>

            </td>
        </tr>
    </table>

</body>
</html>