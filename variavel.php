
<?php include "cabecalho.php"; ?>

<br>
<h1> Variaveis em PHP</h1>
<p> $numero = 10; </p>
<p> $string = "Vini"; </p>
<p> $string1 = "Vinicius camisa ". $numero; </p>
<p> $string2 = "Vinicius camisa $numero"; </p>
<p> $valorDecimal = 10.50; </p>        
<p> $Ativo = true; </p>
<p> /* Aqui é um bloco de comentario */ </p>

<?php //Tudo que está entre as tags do php nao aparece na tela ?>

<?php // A nao ser que usemos a função echo com string ?>
<?php 

echo "Hello World";
echo "<br>";
$numero = 10;
$nome = "Vinicius";
$frase1 = "</p>$nome camisa $numero frase com paragrafo </p>";
$frase2 = $nome." camisa ".$numero;//cocatenação das antigas
echo $frase1;
echo "$frase2 é oque tem dentro da variavel";
?>

<?php include "rodape.php"; ?>
