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
        $num= isset($_GET["num"])?$_GET["num"]:0;
        echo "A tabuada de $num é:<br/>";
        $c=0;
        do {
            echo "$num x $c = ".$num*$c,"<br/>";
            $c++;
        } while ($c<=10);
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 