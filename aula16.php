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
       $prod="leite";
       $preco=4.5;
       echo "O $prod custa R$: $preco<br/>";
       printf ("O %s custa R$ %.2f", $prod, $preco);
       echo "<br/>";
       $x[0]=4;
       $x[1]=8;
       $x[2]=3;
       print_r($x);
       echo "<br/>";
       $v2= array(3,7,5,6,4,9);
       print_r($v2);
       echo "<br/>";
       $txt="Esté é um exemplo de um string gigante que o guanabara fez eu ficar digitando";
       $res = wordwrap($txt, 20, "<br/>\n", true);
       echo "$res";
       $tamanho = strlen($txt);
       echo "<br/> Quantidade de caracteres = $tamanho";
       $nome = "   José da Silva   ";
       echo "<br/> $nome ".strlen($nome);
       $novo = trim($nome);
       echo "<br/> $nome ".strlen($novo);
       $count = str_word_count($txt, 0, 'áàãâç3');
       echo "<br/> Quantidade de palavras no texto = $count";
       $expl = explode(" ",$txt);
       echo "<br/> Texto em vetor: ";
       print_r($expl);
       

    ?>
    <br/>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 