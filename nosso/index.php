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

    <h1>Meu Blog</h1>

    <div class="container">
        <?php include = 'posts.php';
            // Simulação de posts do blog



            // Exibir os posts
            foreach ($posts as $post) {
                echo '<div class="post">';
                echo '<h2><a href="post.php?id=' . $post['id'] . '">' . $post['titulo'] . '</a></h2>';
                echo '<img src="img/filme.jpg' . $post['imagem'] . '" alt="Imagem do post">';
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
