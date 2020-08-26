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
        function soma () {
            $p = func_get_args();
            $tot = func_num_args();
            $s=0;
            for ($i=0; $i < $tot; $i++) { 
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma(1,2,3,4,5,6);
        echo $r;
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 