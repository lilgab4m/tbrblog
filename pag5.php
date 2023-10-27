
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
            <img src="img/Kiss1.jpg" alt="Filme 1">
            <h2>The Last Kiss</h2>
            <p>"O Último Beijo" é um filme de comédia dramática romântica de 2006 dirigido por Tony Goldwyn. O filme acompanha a história de Michael, interpretado por Zach Braff, que enfrenta uma crise no relacionamento com Jenna, interpretada por Jacinda Barrett. Quando Jenna fica grávida, Michael se sente tentado por uma jovem estudante universitária, interpretada por Rachel Bilson. O filme aborda temas como o medo do compromisso e os desafios dos relacionamentos adultos. Apesar de receber críticas mistas, é elogiado por seu retrato honesto das complexidades do amor e dos relacionamentos.
                <br>       <br>       <br>       <br>
                </p>
        </div>
        <div class="item">
            <img src="img/titanic.jpg" alt="Série 1">
            <h2>titanic</h2>
            <p>Jack Dawson (Leonardo DiCaprio) é um jovem aventureiro que, na mesa de jogo, ganha uma passagem para a primeira viagem do transatlântico aTitanic. Trata-se de um luxuoso e imponente navio, anunciado na época como inafundável, que parte para os Estados Unidos. Nele está também Rose DeWitt Bukater (Kate Winslet), a jovem noiva de Caledon Hockley (Billy Zane). Rose está descontente com sua vida, já que sente-se sufocada pelos costumes da elite e não ama Caledon. Entretanto, ela precisa se casar com ele para manter o bom nome da família, que está falida. Um dia, desesperada, Rose ameaça se atirar do Titanic, mas Jack consegue demovê-la da ideia. Pelo ato ele é convidado a jantar na primeira classe, onde começa a se tornar mais próximo de Rose. Logo eles se apaixonam, despertando a fúria de Caledon. A situação fica ainda mais complicada quando o Titanic se choca com um iceberg, provocando algo que ninguém imaginava ser possível: o naufrágio do navio.</p>
            <br>       <br>       <br>       <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/mapa.jpg" alt="Filme 1">
            <h2>Amor de Redenção</h2>
            <p>SAssisti esse filme, eu amei. cheio de emoção. Confesso chorei. A trilha sonora muito bonito. Não li o livro, nem sabia dele. Descobri através do filme. E garanto eu vou ler. Outra coisa, não gosto de ficar comprando o filme e com livro, eu tento ver a essência de cada um de forma diferente. Sou daquela que pode me contar/spoiler do final do filme ou livro, não interfere no meu interesse de assistir ou ler.  Resumindo, tenho que verificar se irei gostar ou não. E nem sempre vai com opinião geral da sociedade. Mas prefiro pensar e ter os meus gosto, se coincidir com a opinião de alguém, legal, senão, respeito. Afinal temos livre arbítrio de pensar, escolher, gostar ou não até de desistir.</p>       <br>       <br>       <br>
        </div>
        <div class="item">
            <img src="img/redencao.jpg" alt="Série 1">
            <h2>O Mapa das Pequenas Coisas Perfeitas 1</h2>
            <p>Em O Mapa das Pequenas Coisas Perfeitas, dois adolescentes ficam presos no tempo, revivendo continuamente o mesmo dia. Enquanto ele quer se livrar desse ciclo, ela quer ficar e aproveitar as oportunidades. Contudo, apenas juntos eles poderão entender os pequenos e preciosos momentos da vida, encontrando um significado nessa vivência e assim se libertarem.</p>
        </div>       <br>       <br>       <br>       <br>
        <!-- Adicione mais divs com a classe "item" para mais indicações -->
    </section>
</body>
<?php
  include_once("templates/footer.php")
?>
</html>