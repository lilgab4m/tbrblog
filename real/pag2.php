
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
            <img src="img/Freira.jpg" alt="Filme 1">
            <h2>A Freira</h2>
            <p>O filme é bom, mas se tiver uma parte 3 trazendo uns detalhes que faltaram nessa segunda parte, vai ser incrível. Acho que essa linhagem de filme tem tudo para dar certo e as pessoas curtem muito. 
                Além disso, acho que a parte 3 trouxem uma coisa mais cômica, mas numa dosagem legal, o problema é se isso virar algo muito evidente. Acho que focar mais no impacto chocante é mais válido e, ainda assim, inserir o humor bem leve !
                <br>       <br>       <br>       <br>
                </p>
        </div>
        <div class="item">
            <img src="img/fale.comigo.jpg" alt="Série 1">
            <h2>Fale comigo</h2>
            <p>Filme muito bom, história muito boa. Não traz aquele clichê de susto Jumpscare com silêncio momentâneo e barulhos excessivos. Aqui a história é bem construída com um temática e enredo que prende o interlocutor do começo ao fim. Uma cena melhor que a outra, sem falar da cena do hospital em que a protagonista fala com o espirito lá, essa cena me deixou de boca aberta. VALE A PENA ASSISTIR, você deve gostar. Hoje esse filme está em cartaz juntamente com o filme a Freira 2 que sinceramente não passou de mais um clichê com final horrível. Fale comigo é um filme com a história do começo ao fim bem amarrada com um final surpreendente, recomendo muito. Não ligue pros outros comentários e vá assistir e depois me agradeça.</p>
            <br>       <br>       <br>       <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/OlhosFamintos.jpg" alt="Filme 1">
            <h2>Olhos famintos</h2>
            <p>Sem dúvidas o melhor filme é o começo de tudo, porque o terceiro filme e o novo que saiu no cinema são tão ruim de assistir, a saga deveria ter parado no segundo filme mesmo. Tempos de ouro de filme de terror de qualidade. Vale a pena ver primeiro filme e o segundo apenas.</p>       <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/BABA.jpg" alt="Série 1">
            <h2>A baba 1</h2>
            <p>Um filme excelente, um dos melhores do gênero. Confesso que ri à beça. A personagem Bee (Samara Weaving) é sensacional, linda e muito divertida. O ator Judah Lewis, que faz o garoto Cole, Cole, faz um trabalho  incrível. O galã interpretado por Robbie Amell me fez rir seguidamente, porque o cara é fantástico. Ou seja, eles fazem cenas dramáticas se tornarem divertidas. É um filme de terror com cenas hilárias de ação e de arrepiar cabelo de careca. Já a Emily Alyn Lind ficou maravilhosa como a gatinha Melanie, discretamente maliciosa e inteligente. Sinceramente, um filmaço. Vale a pena ser assistido.</p>
        </div>       <br>       <br>       <br>       <br>
        <!-- Adicione mais divs com a classe "item" para mais indicações -->
    </section>
</body>
<?php
  include_once("templates/footer.php")
?>
</html>