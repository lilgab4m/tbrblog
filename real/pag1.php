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
            <p>Depressivos, Dramáticos, Anencéfalos, Tristes e Mórbidos: Não assistam este filme. Ele é o tipo de humor para quem quer apenas rir, se divertir, descontrair, e para quem entende ironias e trocadilhos. São incontáveis cenas para rir, e o filme é todo muito bem feito para quem gosta de comédia de verdade. Para pessoas Amargas, o filme é nota 5. Para os bem-humorados, é um filme nota 10, você vai indicar a todos os amigos felizes. Recomendo! <br> <br> <br> <br>
                </p>
        </div>
        <div class="item">
            <img src="img/grande.jpg" alt="Série 1">
            <h2>GENTE GRANDE</h2>
            <p>Um dos filmes mais divertidos e engraçados que eu assisti, não sou muito de assistir filmes eu gosto mais de séries mas os que eu gosto e chamam minha atenção eu assisto até o final. Todos os filmes do Adam Sandler são de qualidade e esse em específico me chamou muita atenção porque fala sobre amizade, amizades de infância que se mantém até a fase adulta (coisa difícil nos tempos de hoje neh). Eu consegui essa proeza de ter amigos meus que me acompanham desde que eu era criança.</p> <br> <br> <br> <br>
        </div>
        <div class="item">
            <img src="img/super.jpg" alt="Filme 1">
            <h2>SUPERBAD</h2>
            <p>O melhor filme teen que existe! Superbad me impressionou desde a primeira vez que assisti pela ótima atuação dos atores, a maioria eram adolescentes na época o que na minha opinião contribui muito no filme e pelo clima nostálgico que o filme trás. É sem sombras de dúvidas meu filme favorito do gênero!.</p><br> <br> <br> <br>
        </div>
        <div class="item">
            <img src="img/VOVO.JPG" alt="Série 1">
            <h2>VÓVÓZONA</h2>
            <p>Muito bom o Filme adorei ele é um filme que acerta em muitas coisas, fazendo com que ele seja divertido para família, tanto para crianças e para adultos</p>br> <br> <br> <br>
        </div>
</body>
<?php
  include_once("templates/footer.php")
?>
</html>
<?php
  include_once("templates/footer.php")
?>
