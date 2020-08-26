<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="aulaPHP/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Levanta e vai estudar! :)";
            break;
            case 6:
            case 7:
                echo "Descanse, pequeno gafanhoto! ;)";
            break;
            default:
                echo "Dia da semana invalido";
        }
    ?>
    <br/>
    <a href="javascript:history.go(-1)">Votar</a>
</div>
</body>
</html>
 