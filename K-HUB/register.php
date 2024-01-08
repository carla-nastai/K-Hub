<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = 'localhost';
    $dbname = 'k-hub';
    $usernameDB = 'root';
    $passwordDB = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usernameDB, $passwordDB);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $unique_id = uniqid();

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (id, username, password) VALUES (?, ?, ?)");
        $stmt->execute([$unique_id, $username, $hashed_password]);

        if ($stmt->rowCount() > 0) {
            header('Location: login.php');
        } else {
            echo "Error registering user.";
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        exit();
    }
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Nunito Sans', sans-serif;
            background-color: rgb(132,132,132);
        }

        .header {
            background-color: black;
            color: #fff;
            height: 60px;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .header {
            background-color: black;
            color: white;
            height: 60px;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .container2 {
            padding-top: 60px;
        }

        .hamburger {
            display: inline-block;
            cursor: pointer;
            padding: 10px 15px;
            margin: 10px;
            transition: all 0.4s;
        }

            .hamburger span {
                display: block;
                width: 30px;
                height: 3px;
                background-color: white;
                margin-bottom: 5px;
                transition: transform 0.4s;
            }

            .hamburger.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .hamburger.active span:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -7px);
            }

        .menu {
    z-index: 0;
    position: fixed;
    display: none;
    position: absolute;
    top: 50px;
    right: 94%;
    transform: translateX(50%);
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    float: right;
    margin-top: 10px;
}

    .menu a {
        display: block;
        margin-bottom: 10px;
        color: #333;
        text-decoration: none;
    }

        .container {
            width: 50%;
            margin: 0 auto;
            padding-top: 120px;
            text-align: center;
            
        }

        .additional-container {
            width: 50%;
            margin: 0 auto;
            background-color: rgb(132,132,132);
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            margin-top: 20px;
            text-align: center;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

            .login-form input {
                width: 100%;
                margin-bottom: 10px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

        .button {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <div class="header">
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
    </div>
    <div class="container">
        <h2>Creează un cont</h2>
        <div class="additional-container">
            <form class="login-form" action="register.php" method="post">
                <label for="username">Nume:</label>
                <input type="text" name="username" id="username" required>
                <br />
                <label for="password">Parolă:</label>
                <input type="password" name="password" id="password" required>
                <br />
                <input class="button" type="submit" value="Register">
            </form>
            <p>Dacă ai deja cont, <a href="login.php"style="color:darkred;" >conectează-te aici</a>.</p>

        </div>
    </div>


    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            var hamburger = document.querySelector(".hamburger");

            if (menu.style.display === "block") {
                menu.style.display = "none";
                hamburger.classList.remove("active");
            } else {
                menu.style.display = "block";
                hamburger.classList.add("active");
            }
        }
    </script>
</body>
</html>