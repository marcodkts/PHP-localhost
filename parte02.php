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
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            $$v = isset($_GET["v".$i])?$_GET["v".$i]:0;
            $i++;
        }
        echo "$num1 $num2 $num3 $num4 $num5";
    ?>
</div>
</body>
</html>
 