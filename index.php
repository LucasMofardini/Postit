<?php
require_once 'config.php';
require_once 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog - Lucas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach($artigos as $artigo) { ?>
        <h2>
            
                <?php echo $artigo['titulo']; ?>
        </h2>
        <p>
        <?php echo nl2br($artigo['conteudo']); ?>
        </p>
      <?php } ?>
    </div>
    
</body>

</html>