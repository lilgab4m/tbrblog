<!DOCTYPE html>
<html>
<head>
    <title>Filmes de Comédia</title>
</head>
<body>
<?php
  include_once("templates/header.php");
?>

    <h1>Categorias</h1>

    <?php
    
        $filmes = array(
            
            array(
                'titulo' => 'TERROR!',
                'foto' => 'img/terror.jng'
                
            ),
            array(
                'titulo' => 'ANIMAÇAO!',
             
                'foto' => 'img/Animaçao.jpg'
            ),
            array(
                'titulo' => 'ROMANÇE!',
                'foto' => 'img/Romançe.jng'
            ),
            
        array(
            'titulo' => 'COMEDIA!',
            'foto' => 'img/comedia.jng!'
        ),
        array(
            'titulo' => 'DOCUMENTARIO!',
         
            'foto' => 'img/documentario.jpeg!'
        ),
        array(
            'titulo' => 'AVENTURA E AÇAO!',
            'foto' => 'aventura.jpg'
        )
        );
    

        foreach ($filmes as $filme) {
            echo '<div class="filme">';
            echo '<img src="' . $filme['foto'] . '" alt="' . $filme['titulo'] . '">';
            echo '<h2>' . $filme['titulo'] . '</h2>';
         
            echo '</div>';
        }
    
    ?>
<?php
  include_once("templates/footer.php")
?>



</body>
</html>