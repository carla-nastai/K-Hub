<!DOCTYPE html>
<html>
<head>
    <script src="meniu.js"></script>
    <link rel="stylesheet" href="scores.css" />
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
        <a href="gramatica.php">Gramatica</a>
        <a href="istorie.php">Istorie</a>
        <a href="scores.php">Scores</a>
    </div>

    <div class="bd">
        <div class="container">
            <img src="img/scor.jpg" alt="Picture">
            <div class="title">Scoruri</div>
        </div>
        <br />
        <br />

        <div class="additional-container">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "k-hub";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Fetch users and their scores for each category
                $sql = "SELECT id, username, hangul_score, vocab_score, gramatica_score FROM users";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Username</th><th>Hangul Score</th><th>Vocab Score</th><th>Gramatica Score</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['hangul_score'] . "</td>";
                        echo "<td>" . $row['vocab_score'] . "</td>";
                        echo "<td>" . $row['gramatica_score'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No users found with scores.";
                }
            ?>
            <br><br>
            <div>
            <form method="post" action="download.php">
                <button type="submit" name="download" class="button" onmouseover="this.style.backgroundColor='darkred'" onmouseout="this.style.backgroundColor='black'">Hangul Worksheet</button><br>
                </form>
                <form method="post" action="download3.php">
                <button type="submit" name="download" class="button" onmouseover="this.style.backgroundColor='darkred'" onmouseout="this.style.backgroundColor='black'">Vocab Worksheet</button><br>
                </form>
                <form method="post" action="download2.php">
                <button type="submit" name="download" class="button" onmouseover="this.style.backgroundColor='darkred'" onmouseout="this.style.backgroundColor='black'">Gram Worksheet</button><br>
                </form>
            <div>
        </div>
    </body>
</html>
