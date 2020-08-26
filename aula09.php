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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos";
        if($i < 16){
            $tipoVoto = "não vota";
        }
        else if (($i>=16 && $i<18) || $i>65) {
            $tipoVoto = "voto opcional";
        }
        else {
            $tipoVoto="voto obrigatorio";
        }
        
        echo "<br/>Para essa idade $tipoVoto.";
    ?>
    <br/>
    <a href="aula09.html">Voltar</a>
</div>
</body>
</html>
 