<?php
require_once 'config.php';
require_once 'src/Artigo.php';

$obj_artigo =  new Artigo($mysql);
//Pegamos o id da url 
$artigo = $obj_artigo->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>
            <?php echo $artigo['titulo']; ?>
        </h1>
        <p>
        <?php echo nl2br($artigo['conteudo']); ?>
        </p>
        <div>
            <a class="botao botao-block" href="../phpweb-master/">Voltar</a>
        </div>
    </div>
</body>

</html>

