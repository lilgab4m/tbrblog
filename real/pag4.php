
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
        <h1>Indicações de Filmes e Séries de Terror</h1>
    </header>
    <section class="container">
        <div class="item">
            <img src="img/IndianaJones.jpg" alt="Filme 1">
            <h2>Os Caçadores da Arca Perdida</h2>
            <p>Um clássico absoluto do cinema, uma obra-prima da década de 80, poucas palavras podem descrever o quão excelente é esse filme, antes o gênero ação e aventura estava ultrapassado, mas aí veio Os Caçadores da Arca Perdida e inovou o gênero, além de apresentar um dos personagens mais queridos do cinema, INDIANA JONES. Cinco estrelas é pouco pra dar, eu dou nota 11 pra Indiana Jones e os Caçadores da Arca Perdida, um filme com uma história épica, efeitos especiais excelentes(a maioria deles), ótimos personagens, um protagonista extremamente carismático e cenários fabulosos.
                <br>       <br>       <br>       <br>
                </p>
        </div>
        <div class="item">
            <img src="img/MissãoImpossível.jpg" alt="Série 1">
            <h2>MissaoImpossivel</h2>
            <p>muito bom! um ótimo filme recomendo para qualquer um ver! o filme tem pouquíssimos defeitos, uma história ótima, com uma trilha ótima que te empolga pra ver e muito! são as qualidades do filme agora o único defeito e que o filme inteiro é focado em espionagem e só no final vira ação essa trancisao que é meio ruim,mas tirando isso o filme é muito bom!</p>
            <br>       <br>       <br>       <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/Furiosos7.jpg" alt="Filme 1">
            <h2>Velozes & Furiosos 7</h2>

            <p>
            Simplesmente Fantástico é incrível como a franquia melhorou muito depois do 4 filme,denovo não é um filme pra vc levar a sério,então se vc é um daqueles fãs chatão de velozes e furiosos,que não gosta da franquia,ou que só gosta dos 3 primeiros filmes,não assista esse filme pq vc pode se decepcionar,as cenas de ação como sempre são ótimas,os personagens são bem divertidos e cativantes,e o Kurt Russel fez uma participação bem legal como Sr Ninguém,as músicas tambem são muito boas,infelizmente é aqui que a gente teve um desfecho pra história do Brian O Connor que junto com o Dom,eram quem movia a franquia,mais pelo menos ele teve um final digno,álias o final desse filme é muito bom,e muito emocionante,quase tão bom quanto o fim do velozes e furiosos 5,recomendo pra quem é fãs de filme de ação,e fãs de VERDADE da franquia,é aqui que acontece a cena dos prédios,e da rua se rachando,se vc assim como eu que gosta de filmes de ação e tem a mente aberta pra essa franquia,assista pq esse filme é muito bom e um dos melhores da franquia
            </p>
                   <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/papel.jpg" alt="Série 1">
            <h2>La Casa De Papel</h2>

            <p>
            Ótima série da Netflix, ótimos atores, diretores, e o professor? Muito inteligente! Me apaixonei por ele. Também mostra como existe mesmo corrupção em governos, sujos e engana o povo. Claro que na série fez que o governo deve ajuda- lós porque estava numa situação crítica. Mas mesmo assim é uma bandidagem  de poder. Foi muito bom a Netflix mostrar isso é sabemos que corrupção existe desde o velho testamento.
É um programa o qual nos traz fatos que acontecem nesta sociedade , onde muitos sem falta de alimento ou trabalho acabam se entregando a vida dos crimes! Mostra também o quão a polícia é todo outro movimento do governo pode ser instantaneamente prestável , mas também pode ser sem cabimento . Me levo a dizer que dou 10 pra essa série ! Tanto o meio de roteiro , atores e aos dubladores tudo perfeito ! Parabéns !!!👏🏻👏🏻
            </p>
            <br>       <br>       <br>       <br>
        </div>       
        <!-- Adicione mais divs com a classe "item" para mais indicações -->
    </section>
</body>
<?php
  include_once("templates/footer.php")
?>
</html>