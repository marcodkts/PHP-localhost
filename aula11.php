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
        $n=isset($_GET["n"])?$_GET["n"]:1;
        $f=isset($_GET["f"])?$_GET["f"]:10;
        $p=isset($_GET["p"])?$_GET["p"]:1;
        if ($n<$f)
        while ($n<=$f) {
            echo "$n <br/>";
            $n = $n + $p;
        }
        else {  
            while ($n>=$f) {
                echo "$n <br/>";
                $n = $n - $p;
            }
        }
        ?>
        <a href="javascript:history.go(-1)">Votar</a>
</div>
</body>
</html>
 