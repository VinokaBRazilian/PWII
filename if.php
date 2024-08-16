<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<div class="container">

<h1> Estrutura condicional (IF ELSE)</h1>

<p> $inteira = 10 </p>

<p> $nome = "Prof" </p>

<p> $valor = 10.50 </p>

<p> $ativo = true </p>
<pre>
<?php

$inteiro = 10;


if($inteiro < 10)
{
    echo "<h2> A variavel é menor que 10. </h2>";
}
else
if($inteiro > 10)
{
    echo "<h2> A variavel é maior que 10. </h2>";
}
else{
    echo "<h2> A variavel é igual a 10. </h2>";
}






?>
</pre>

<pre> if($numero == 10)
    {
        echo "o conteudo é 10";
    }else
    if($inteira >= 11)
{
echo "maior ou igual a 11";
}
    else
    {
        echo "nao é 10";
    }
</pre>

<p> As variaveis string podem ser contados os caracteres e usados no if
</p>


<pre>

if(count($nome) > 10)
{
echo "o nome tem mais de 10 caracteres, a quantidade é de " .count($nome);
}
</pre>
<?php

$nome = "Vinicius";
if( strlen($nome) > 10)
{
echo "<h2>Seu nome tem mais que 10 caracteres, a quantidade é de " .strlen($nome)."</h2>";

}
else
if( strlen($nome) < 10)
{

echo "<h2> Seu nome tem menos que 10 caracteres, a quantidade é de " .strlen($nome). "</h2>";
}
else
{
echo "<h2> Seu nome tem 10 caracteres</h2>";
}

?>

<p>
    Podemos verificar se a variavel $nome esta vazia
</p>

<pre>

<?php

$nome = "";

if(empty($nome))
{
    echo "Sua variavel esta vazia";

}
else
{
    echo "Tem coisa nessa variavel $nome";
}

?>
</pre>
<p>
    Também podemos comparar string normalmente
</p>
<pre>
if($nome == "Fernando")
{
    echo "Nome igual";
}
else
{
echo "Nomes diferentes";
}
</pre>
<p>
    Podemos verificar se a variavel é verdadeira ou falsa
</p>

<pre>
if($ativo)
{
echo "verdadeira";
}
else
{
echo "falso";
}



</pre>
</div>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>