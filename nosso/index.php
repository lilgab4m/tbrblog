<!DOCTYPE html>
<html>
<head>
    <title>Meu Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">CATEGORIAS</a></li>
            <li><a href="#">SOBRE</a></li>
            <li><a href="#">CONTATO</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Meu Blog</h1>
        <?php
            // Simulação de posts do blog
            $posts = array(
                array('id' => 1, 'titulo' => 'Comédia', 'conteudo' => 'Aqui você encontra dicas dos melhores filmes e séries de comédeia do momento.   '),
                array('id' => 2, 'titulo' => 'Aventura e Ação', 'conteudo' => 'Aqui você encontra dicas dos melhores filmes e séries de Aventura e ação do momento.'),
                array('id' => 3, 'titulo' => 'Terror', 'conteudo' => 'Aqui você encontra dicas dos melhores filmes e séries de Terror do momento.'),
                array('id' => 3, 'titulo' => 'Romance', 'conteudo' => 'Aqui você encontra dicas dos melhores filmes e séries de Romance do momento.') ,
                array('id' => 3, 'titulo' => 'Suspense', 'conteudo' => 'Aqui você encontra dicas dos melhores filmes e séries de Suspense do momento.') ,
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
