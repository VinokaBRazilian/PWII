<?php include "cabecalho.php"; ?>
<h1>Array</h1>
<p> As variaveis do tipo array são muito utilizadas quando vamos listar coisas.
    Os arrays em php são listas de quaisquer tipo de dados.
</p>

<pre>

$array = [];
$array = Array();
$array[0] = "Oi";
$array[2] = 10;
$array["Vinicius"] = "Aluno";
$array[$array[2]] = "teste";

</pre>

<?php
               //0   1    2      3     4      5//
$array = Array("Oi",10,"Prof","teste",1.99, true);

echo "<h2>Como saber se deu certo?</h2> ";
var_dump($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
var_dump($array);
echo "</pre>";

for($i = 0; $i < count($array); $i++)
{
    echo "$array[$i]<br>";
}



?>

<p> <h2>Existem diversas formas de criar uma variavel array</h2></p>
<pre>

    array(
        chave => valor,
        chave2 => valor2,
        chave3 => valor3,
        ...
    )
    </pre>
    <p>
         Esse tipo de Array (chave e valor) funciona da mesma forma porem não existem mais os indice com números passando a usar string como chave para os valores
    </p>   
    <?php
    
    $array = array(
        "foo" => "bar",
        "bar" => "foo",
    );

// Utilizando a sintaxe curta

$array = [

    "foo" => "bar",
    "bar" => "foo",
];
echo "<pre>";
print_r($array);
echo "</pre";

$resultados = [
"Id" => 1,
"Nome" => "Vinicius",
"Idade" => 34,
"Salario" => 5325.50,
"Professor" => true
];

echo "<pre>";
print_r($resultados);
echo "</pre>";

echo $resultados["Nome"];

?>


<p>Para varrer todo o array de chave e valor
    precisamos de um laço de repetição exclusivo chamado foreach()</p>
    <pre>
         foreach ($array as $chave => $valor)
         {
            echo "Valor da chave: ".$array[$chave]"<br>";
            // ou
            echo "Apenas valor: ".$valor;

    
         }
        </pre>

        <?php

foreach ($resultados as $chave => $valor)
{
   echo "Valor pela chave: ".$resultados[$chave]."<br>";
   //ou
   echo "Apenas valor: ".$valor."<br>";
   echo "Apenas $chave: ".$chave."<br>";
}
   ?>

<?php include "rodape.php"; ?>