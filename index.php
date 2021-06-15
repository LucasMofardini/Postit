<?php
require_once 'config.php';
require_once 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if($_POST['titulo'] && $_POST['conteudo']){
        $artigo->adiciona($_POST['titulo'],$_POST['conteudo']);
        header("Location: index.php");
        
    }
    else{
        echo '
        <div class="container-erro">
        <span class="msg-error">
       Ambos os campos precisam ser preenchidos
        </span>
        </div>
        ';
    }

}
if($_POST['id'] && $_SERVER['REQUEST_METHOD'] === 'POST'){
    echo $_POST['id'];
    $artigo->apaga($_POST['id']);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Postit</title>
    <meta charset="UTF-8">
    <link rel="icon" href="https://image.flaticon.com/icons/png/512/1095/1095052.png">
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
        <div class="container-inserir">
            <div class="container-mais">
            <img src="http://www.clker.com/cliparts/s/7/R/k/j/Z/icon-add.svg.med.png" alt="">
            </div>
            <div class="container-form-adicionar">
                <form action="index.php" method="post">
                    <!-- <h3>Inserir</h3> -->
                    <div class="bg-radio">
                    <div class="container-color">
                        <input type="radio" name="cor" id="laranja" value="1" checked="checked">
                        <label for="laranja" id="laranja"></label>
                        <input type="radio" name="cor" id="azul" value="2">
                        <label for="azul" id="azul"></label>
                        <input type="radio" name="cor" id="verde" value="3">
                        <label for="verde" id="verde"></label>
                    </div>
                    </div>
                    <input autocomplete="off" type="text" id="titulo" name="titulo" placeholder="Titulo">
                    <textarea id="conteudo" name="conteudo" placeholder="Conteudo . . ."></textarea>
                    <input type="submit">
                </form>
            </div>
        </div>

    <div class="container">
        <?php foreach($artigos as $artigo) { ?>
        <div class="container-postit">
            <div class="escrita">
                    <h2>
                        <?php echo $artigo['titulo']; ?>
                    </h2>
                    <form action="index.php" method="POST">
                        <input style="display:none;"  name="id" value="<?php echo $artigo['id']; ?>">
                        <button type="submit" class="btn-fechar"> &#x2715 </button>
                    </form>
                    
                    </p>
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
<script src="script.js"></script>
</html>

