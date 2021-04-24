<?php
require_once 'config.php';
require_once 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Postit</title>
    <meta charset="UTF-8">
    <link rel="icon" href="https://images.vectorhq.com/images/previews/479/postit-538805.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>

<body>
  <section class="section-main">
        <div class="div-h1"> 
            <h1>Postits</h1>
            <img src="https://imagensemoldes.com.br/wp-content/uploads/2020/10/Papel-Post-it-PNG-1018x1024.png" alt="">
        </div>
        <div class="container-mais">
        <img src="http://www.clker.com/cliparts/s/7/R/k/j/Z/icon-add.svg.med.png" alt="">

        </div>

    <div class="container">
        <?php foreach($artigos as $artigo) { ?>
        <div class="container-postit">
            <div class="escrita">
                    <h2>
                        <?php echo $artigo['titulo']; ?>
                    </h2>
                    <p>
                    <?php echo nl2br($artigo['conteudo']); ?>
                    </p>
                    <small>
                        <?php echo $artigo['horario_publicacao']; ?>
                    </small>

            </div>
        </div>
      <?php } ?>
    </div>
  <section>
</body>
<footer>
    <div class="container-footer">
    <b><></b><span>WITH</span> <b>♥</b> <p>by</p>  <a target="_blank" href="https://github.com/lucasmofardini"> @Lucas Mofardini</a> e <a target="_blank" href="https://github.com/viniciusgrangeiro"> @Vinicius Mofardini </a>
    </div>
</footer>
</html>

