<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Card</title>
    <link rel="stylesheet" href="style/main.css">
</head>

<body>
    <img class="background" src="images/background/background3.gif" alt="background">
    <div class="container1">

        <div class="content">
                    <header>
            <div class="header">
                <img class="logo" src="images/logo/logo.png" alt="logo">
                <img src="images/logo/icon.gif" alt="icon" class="icon">
            </div>
            <div class="animation">
                <img class="lugia" src="images/background/aa.gif" alt="">
            </div>
        </header>
            <div class="box">
                <form action="Main.php" method="post">
                    <label for="nome" class="text">Olá jogador, como se chama? (7 caracteres)</label>
                    <input type="text" placeholder="Seu nome" name="nome" required maxlength="7">
                    <div class="info">
                        <span id="icon">i</span>
                        <span>Seu adversário é Gladion.
                        </span>
                    </div>
                    <button type="submit" name="submit">Jogar</button>
                </form>
            </div>
        </div>

    </div>

    <audio autoplay loop>
        <source src="sound/soundtrack.mp3" type="audio/mpeg">
    </audio>
</body>

</html>