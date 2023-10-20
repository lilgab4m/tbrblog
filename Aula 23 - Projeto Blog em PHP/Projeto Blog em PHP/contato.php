<?php
  include_once("templates/header.php");
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <!-- ESTILOS DO PROJETO -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <h1>Página de contato</h1>
  <div>
    <div>
      <form action="">
        <input type="text" placeholder="Nome" required>
        <input type="text" id="telefone" placeholder="Número" required>
        <input type="email" placeholder="E-mail" required>
        <textarea name="mensagem" id="mensagem" cols="30" rows="4"></textarea>
        <button type="submit">Enviar</button>
      </form>
      <script>

        const telefone = document.querySelector('#telefone');

        telefone.addEventListener('input', function (event) {
          const numero = event.target.value;
          const numeros = numero.replace(/\D/g, '');
          const parte1 = numeros.slice(0, 2);
          const parte2 = numeros.slice(2, 4);
          const parte3 = numeros.slice(4, 9);
          const parte4 = numeros.slice(9, 13);
          const numeroFormatado = `(${parte1}) ${parte2} ${parte3}-${parte4}`;
          event.target.value = numeroFormatado;
        });

      </script>
    </div>
    <div>
      <h3>Telefone</h3>
      <p>(55) 11 4002-8922</p>
      <h3>E-mail</h3>
      <p>emailexample@gmail.com</p>
      <h3>Intuito</h3>
      <p>A página de contato serve para que o usuário possa se comunicar conosco de forma fácil e rápida. Na sua mensagem você pode escrever sobre:</p>
      <li>Algum feedback</li>
      <li>Algum erro com o site</li>
      <li>Dificuldade</li>
      <li>Segerir alguma serie</li>
    </div>
  </div>
<?php
  include_once("templates/footer.php")
?>