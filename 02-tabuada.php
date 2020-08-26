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
        $num = isset($_GET["num"])?$_GET["num"]:1;
        $c=0;
        for ($i=1; $i <= $num; $i++) { 
            $mod=$num%$i;
            if ($mod==0) {
                $c++;
            }
        }
        if ($c>2) {
            echo "$num é par";
        }
        else {
            echo "$num é impar";
        }
    ?>
    <a href="javascript:history.go(-1)">Votar</a>
</div>
</body>
</html>
 