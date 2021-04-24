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
</head>

<body>
        <div class="div-h1"> 
            <h1>Postits</h1>
            <img src="https://imagensemoldes.com.br/wp-content/uploads/2020/10/Papel-Post-it-PNG-1018x1024.png" alt="">
        </div>

    <div class="container">
        <?php foreach($artigos as $artigo) { ?>
        <div class="container-postit">
                <h2>
                    <?php echo $artigo['titulo']; ?>
                </h2>
                <p>
                <?php echo nl2br($artigo['conteudo']); ?>
                </p>
        </div>
      <?php } ?>
    </div>
    
</body>

</html>