<?php include "cabecalho.php"; ?>



<?php
            //     0       1        2     //
$frutas = array("maça","laranja","banana");

print_r($frutas); // Escreva na tela dos dados basicos do array

var_dump($frutas); // Detalha os dados do array

echo count($frutas); // Escreve na tela a quantidade de itens que o array possui

array_push($frutas, "kiwi"); // Adiciona um novo item do array

foreach($frutas as $fruta){
    echo $fruta;
}
?>

/*Exercicio*/

/*Gere um Array que cade indice desse array receba um novo array com as Chaves Nome,
 Idade e email com seus respectivos valores inventados aleatoriamente*/ 

<?php

 $pessoa = array(

    array(
        
        "nome" => "Vinicius", 
        "idade"=> "21",
        "email" => "vinietec@etec.sp.gov.br"
    ),

        array(
            "nome" => "Pedro", 
            "idade"=> "17",
            "email" => "pedroetec@etec.sp.gov.br"
        ),
        array(       
            "nome" => "Leandro", 
            "idade"=> "25",
            "email" => "leandroetec@etec.sp.gov.br"
        ),

        array(
        
            "nome" => "Rodrigo", 
            "idade"=> "20",
            "email" => "rodrigoetec@etec.sp.gov.br"
        ),
        array(
        
            "nome" => "Jonas", 
            "idade"=> "20",
            "email" => "jonasetec@etec.sp.gov.br"
        ),
        array(
        
            "nome" => "Marcos", 
            "idade"=> "21",
            "email" => "marcosetec@etec.sp.gov.br"
        ),
        array(
        
            "nome" => "Rebeca", 
            "idade"=> "17",
            "email" => "rebeetec@etec.sp.gov.br"
        ),
        array(
        
            "nome" => "Wylliam", 
            "idade"=> "27",
            "email" => "wylliametec@etec.sp.gov.br"
        ),
        array(
        
            "nome" => "Vitor", 
            "idade"=> "18",
            "email" => "vitoretec@etec.sp.gov.br"
        ),
        array(
        
            "nome" => "Rodolfo", 
            "idade"=> "24",
            "email" => "rodolfoetec@etec.sp.gov.br"
        )
    );
  
    
echo "<table border='5'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Idade</td>";
echo "<td>Email</td>";
echo "</tr>";


 for($i = 0; $i < count($pessoa); $i++)
 {
echo "<tr>";
echo "<td>".$pessoa[$i]["nome"]."</td>";
echo "<td>".$pessoa[$i]["idade"]."</td>";
echo "<td>".$pessoa[$i]["email"]."</td>";
echo "</tr>";
 }
echo "</table border>";

echo "<br>";

echo "<table border='5'>";
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Idade</td>";
echo "<td>Email</td>";
echo "</tr>";


foreach($pessoa as $a)
  {
echo "<tr>";
echo "<td>".$a["nome"]."</td>";
echo "<td>".$a["idade"]."</td>";
echo "<td>".$a["email"]."</td>";
echo "</tr>";
 }
echo "</table border>";

echo "<br>";


foreach($pessoa as $a)
{

echo "<tr>";
foreach($a as $chave => $valor)
{


    
}

}
?>


<?php include "rodape.php"; ?>