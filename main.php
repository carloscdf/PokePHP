<?php

include('Batalha.php');

$pokemon1 = new Pokemon("Iron Valiant", "Fada", "https://art.ngfiles.com/images/2972000/2972844_mr300milesof_iron-valiant-mvc-style.png?f1673061792");
$pokemon2 = new Pokemon("Charizard", "Fogo", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrVUqhhJRZjyzCfxd8qGWP0ZSqZqUiPK6oXg&usqp=CAU");
$pokemon3 = new Pokemon("Tinkaton", "Fada", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/183a1825-8da7-4f7f-929d-a124d31bc6b7/dfiux40-e49f2f5a-4f19-4896-af1e-bd3673a28138.png/v1/fill/w_1920,h_1921/pixel_tinkaton_by_mariothepixelarter_dfiux40-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTkyMSIsInBhdGgiOiJcL2ZcLzE4M2ExODI1LThkYTctNGY3Zi05MjlkLWExMjRkMzFiYzZiN1wvZGZpdXg0MC1lNDlmMmY1YS00ZjE5LTQ4OTYtYWYxZS1iZDM2NzNhMjgxMzgucG5nIiwid2lkdGgiOiI8PTE5MjAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.Wgj3AyfHlxOPMGXX6u_VyXtNNbZD5p1fzLvBNEp-xO8");
$pokemon4 = new Pokemon("Scovillain", "Grama", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e57c0ca5-c162-43e7-b0dc-40f215c30321/dl2sd2n-bc69e5d0-cb7f-4f0e-9f45-5afcb9f87911.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiIvZi9lNTdjMGNhNS1jMTYyLTQzZTctYjBkYy00MGYyMTVjMzAzMjEvZGwyc2Qybi1iYzY5ZTVkMC1jYjdmLTRmMGUtOWY0NS01YWZjYjlmODc5MTEuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.quu1h2LBe8UzDfK36zHmcVDAHo9LY8bgNa6tkf1-twg");
$pokemon5 = new Pokemon("Ceruledge", "Fogo", "https://cdnb.artstation.com/p/assets/images/images/053/605/597/large/vinicius-leonidas-pokemon-ceruledge.jpg?1662590966");
$pokemon6 = new Pokemon("Enamorus", "Fada", "https://rejuvenation.wiki.gg/images/905.png?bd547c");
$pokemon7 = new Pokemon("Tapu Koko", "Elétrico", "https://cdna.artstation.com/p/assets/images/images/045/083/054/20220111011048/smaller_square/falgaia-tapu-koko-by-falgaia-dabv1u3.jpg?1641885048");
$pokemon8 = new Pokemon("Solgaleo", "Psiquico", "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/5bce40cb-424f-4d3a-b9de-1384a286308d/darxd6c-18fcdd31-b549-4c7f-bb13-991ab63917d9.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzViY2U0MGNiLTQyNGYtNGQzYS1iOWRlLTEzODRhMjg2MzA4ZFwvZGFyeGQ2Yy0xOGZjZGQzMS1iNTQ5LTRjN2YtYmIxMy05OTFhYjYzOTE3ZDkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.q9q2Z5ICbJQ4k61JY-3sfZTeO1mXQ-Tb9LN2xYZZ9kE");
$pokemon9 = new Pokemon("Lunala", "Psiquico", "https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/296864e206c1249.png");
$pokemon10 = new Pokemon("Pikachu", "Elétrico", "https://cdna.artstation.com/p/assets/images/images/048/795/078/large/cyb3rdragon-r3.jpg?1650966127");
$pokemon11 = new Pokemon("Spectrier", "Fantasma", "https://art.pixilart.com/thumb/0522d60455920d7.png");
$pokemon12 = new Pokemon("Alcremie", "Fada", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4w5zyslb0WgsiRP1yVTqDCjSgGzCMyLnwrQhU9BpLgi3Q0sLxjqUq-EIta35NxpmaymU&usqp=CAU");

$deck = array($pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6, $pokemon7, $pokemon8, $pokemon9, $pokemon10, $pokemon11, $pokemon12);


session_start();

if (isset($_POST["submit"])) {
    $_SESSION['nome_jogador'] = $_POST["nome"];
    header("Location: main.php");
    exit();
}

$_SESSION['nome_adversario'] = "Gladion";

$jogador1 = new Jogador($_SESSION['nome_jogador']);
$jogador2 = new Jogador($_SESSION['nome_adversario']);

$jogador1->setCartas($deck);
$jogador2->setCartas($deck);

$batalha = new Batalha();

$batalha->realizarBatalha($jogador1, $jogador2);
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
    <img class="background" src="images/background/background2.gif" alt="backgroudn">
    <div class="container1">

        <div class="content">
            <?php

            $cartasPokemon = new CartasPokemon();
            $cartasPokemon->exibirCartas($jogador1, $jogador2);

            ?>
            <div class="header1">
                <div class="header2">
                    <img class="logo2" src="images/logo/logo.png" alt="logo">
                    <img src="images/logo/icon.gif" alt="icon" class="icon">
                </div>
            </div>
            <div class="pontuacao">
                <?php
                echo "<span class='tit'>" . $batalha->verificarFimDeJogo($jogador1, $jogador2) . "<hr class='hr'>";
                echo $jogador1->getNome() . ": " . $jogador1->getPontuacao() . "<br>" . $jogador2->getNome() . ": ".$jogador2->getPontuacao()."</span>";

                ?>
                <a class="button" href="Main.php">Jogar novamente</a>
                <a class="button2" href="index.php">Página inicial</a>
            </div>
        </div>

    </div>

    <audio autoplay loop>
        <source src="sound/soundtrack1.mp3" type="audio/mpeg">
    </audio>
</body>

</html>