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
        <div class = "escrita1">
        <h1>Confort Cine</h1>
        <p>Aqui voce encontrara as melhores dicas de filmes e series
</div>

        </p>
        <?php
            // Simulação de posts do blog
            $posts = array(
                array('titulo' => 'Post 1', 'conteudo' => 'Conteúdo do post 1.'),
                array('titulo' => 'Post 2', 'conteudo' => 'Conteúdo do post 2.'),
                array('titulo' => 'Post 3', 'conteudo' => 'Conteúdo do post 3.')
            );

            // Exibir os posts
            foreach ($posts as $post) {
                echo '<div class="post">';
                echo '<h2>' . $post['titulo'] . '</h2>';
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
