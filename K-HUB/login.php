<?php

header('Content-Type: text/html; charset=utf-8');

session_start();

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

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];

            header('Location: HOME.php');
            exit();
        } else {
            header('Location: login.php?error=1');
            exit();
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
            display: none;
            position: absolute;
            top: 50px;
            right: 0;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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

            .login-form button {
                width: 100%;
                padding: 10px;
                background-color: black;
                color: darkred;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
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
        <h2>Login</h2>
        <div class="additional-container">
            <form class="login-form" action="login.php" method="POST">
                <input type="text" name="username" placeholder="nume utilizator" required>
                <input type="password" name="password" placeholder="parolă" required>
                <button type="submit">Login</button>
            </form>
            <p>Dacă nu ai cont încă, <a href="register.php" style="color:darkred">înregistrează-te aici</a>.</p>

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