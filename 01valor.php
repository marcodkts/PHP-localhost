<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor";
        echo "</br>Sua raiz é ". number_format($rq,2);
        
    ?>
    <a href="exercicio01.php">Voltar</a>
</div>
</body>
</html>
 