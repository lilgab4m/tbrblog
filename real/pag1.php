<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Indicações de Filmes e Séries</title>
</head>
<body>

<?php
  include_once("templates/header.php");
?>


<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
  
    padding: 20px;
    text-align: center;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

.item {
    text-align: center;
    width: 250px;
}

.item img {
    width: 100%;
    height: auto;
}



</style>


    <header>
        <h1>Indicações de Filmes e Séries de Cómedia</h1>
    </header>
    <section class="container">
        <div class="item">
            <img src="img/meugaroto.jpg" alt="Filme 1">
            <h2>ESSE É MEU GAROTO</h2>
            <p>
                </p>
        </div>
        <div class="item">
            <img src="img/grande.jpg" alt="Série 1">
            <h2>GENTE GRANDE</h2>
            <p>Descrição da Série 1.</p>
        </div>
        <div class="item">
            <img src="img/super.jpg" alt="Filme 1">
            <h2>SUPERBAD</h2>
            <p><S>SUPERBAD</S>.</p>
        </div>
        <div class="item">
            <img src="img/VOVO.JPG" alt="Série 1">
            <h2>VÓVÓZONA</h2>
            <p>Descrição da Série 1.</p>
        </div>
</body>
<?php
  include_once("templates/footer.php")
?>
</html>
<?php
  include_once("templates/footer.php")
?>
