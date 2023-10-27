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
        <h1>Indicações de Filmes e Séries de Animação</h1>
    </header>
    <section class="container">
        <div class="item">
            <img src="img/animaçao.jpg" alt="TOY STORY">
            <h2>TOY STORY</h2>
            <p>O aniversário de Andy está chegando e os brinquedos estão nervosos. Afinal de contas, eles temem que um novo brinquedo possa substituí-los. Liderados por Woody, um caubói que é também o brinquedo predileto de Andy, eles montam uma escuta que lhes permite saber dos presentes ganhos. Entre eles está Buzz Lightyear, o boneco de um patrulheiro espacial, que logo passa a receber mais atenção do garoto. Isto aos poucos gera ciúmes em Woody, que tenta fazer com que ele caia atrás da cama. Só que o plano dá errado e Buzz cai pela janela. É o início da aventura de Woody, que precisa resgatar Buzz também para limpar sua barra com os outros brinquedos.
                <br>       <br>       <br>       <br>
                </p>
        </div>
        <div class="item">
            <img src="img/ralf.jpg" alt="Detona Ralph">
            <h2>Detona Ralph</h2>
            <p>Detona Ralph acompanha o vilão de Conserta Félix Jr. de um popular jogo de fliperama chamado Ralph (John C. Reilly) que está completando 30 anos. Apesar de cumprir suas tarefas à perfeição, Ralph gostaria de receber uma atenção maior de Felix Jr. (Jack McBrayer) e os demais habitantes do jogo, que nunca o convidam para festas e nem mesmo o tratam bem. Para provar que merece tamanha atenção, ele promete que voltará ao jogo com uma medalha de herói no peito, no intuito de mostrar seu valor. É o início da peregrinação de Ralph por outros jogos, em busca de um meio de obter sua sonhada medalha.</p>
            <br>       <br>       <br>       <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/gg.jpg" alt="O Incrível Mundo de Gumball">
            <h2>O Incrível Mundo de Gumball</h2>
            <p>O Incrível Mundo de Gumball (muitas vezes referido apenas como Gumball) é uma série animada britânica-americana de televisão criada por Ben Bocquelet para o Cartoon Network. É produzido principalmente pelo Cartoon Network Development Europe. A série estreou nos Estados Unidos com o episódio "O DVD" em 3 de maio de 2011 e no Brasil estreou com o episódio "O Responsável" em 4 de setembro de 2011. Segundo o site do Cartoon Network, O Incrível Mundo de Gumball é uma das séries mais populares no canal, junto com Hora de Aventura, Apenas Um Show e Steven Universo.

A série gira em torno da vida de Gumball Watterson, um gato de 12 anos de idade que frequenta a escola em Elmore e vive em uma linha do tempo onde as pessoas são animais, objetos, etc. Acompanhado de seu peixe de estimação, irmão adotivo, e melhor amigo Darwin Watterson. Eles frequentemente se veem envolvidos em várias confusões em torno da cidade, durante ele interage com os</p>       <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/aventuraa.jpg" alt="Hora de Aventura">
            <h2>Hora de Aventura</h2>
            <p>Finn, o garoto humano com um chapéu incrível, e Jake, o cachorro inteligente, são amigos íntimos e parceiros em estranhas aventuras na terra do Ooo.</p>
        </div>       <br>       <br>       <br>       <br>
        <!-- Adicione mais divs com a classe "item" para mais indicações -->
    </section>
</body>
<?php
  include_once("templates/footer.php")
?>
</html>