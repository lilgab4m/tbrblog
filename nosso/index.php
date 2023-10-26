<!DOCTYPE html>
<html>
<head>
    <title>Meu Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">CATEGORIAS</a></li>
            <li><a href="sobre.php">SOBRE</a></li>
            <li><a href="contato.php">CONTATO</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Meu Blog</h1>
        <img src="Aula 23 - Projeto Blog em PHP\Projeto Blog em PHP\img\filme.png" alt="">
        <?php
            // Simulação de posts do blog
            $posts = array(

                array('id' => 1, 'titulo' => 'Comédia', 'conteudo' => 'Conteúdo do post 1.'),
                array('id' => 2, 'titulo' => 'Aventura e Ação', 'conteudo' => 'Conteúdo do post 2.'),
                array('id' => 3, 'titulo' => 'Terror', 'conteudo' => 'Conteúdo do post 3.'),
                array('id' => 3, 'titulo' => 'Romance', 'conteudo' => 'Conteúdo do post 3.') ,
                array('id' => 3, 'titulo' => 'Animação', 'conteudo' => 'Conteúdo do post 3.') ,

            );

            // Exibir os posts
            foreach ($posts as $post) {
                echo '<div class="post">';
                echo '<h2><a href="post.php?id=' . $post['id'] . '">' . $post['titulo'] . '</a></h2>';
                echo '<p>' . $post['conteudo'] . '</p>';
                echo '</div>';
            }
        ?>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> Meu Blog. Todos os direitos reservados.</p>
    </div>
</body>
</html>
