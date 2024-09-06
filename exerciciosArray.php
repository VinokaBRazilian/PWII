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
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PWII</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pagina Inicial</a>
        </li>
        <li class="nav-item">
          
        <a class="nav-link" href="variavel.php">
            Variavel
          </a>
        
        </li>
         </li>

         </li>



        <li class="nav-item">
          
          <a class="nav-link" href="if.php">
              If
            </a>
          
          </li>

          
          <li class="nav-item">
          
          <a class="nav-link" href="array.php">
              Array
            </a>
          
          </li>

          <li class="nav-item">
          
          <a class="nav-link" href="exerciciosArray.php">
              Exercicios Array
            </a>
          
          </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          
        <a class="nav-link" href="bootstrap.php">
            Bootstrap
          </a>
        
        </li>
    
        <li class="nav-item">
          
          <a class="nav-link">
              Disabled
            </a>
          
          </li>
      

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">

<div class="row">


<div class="col-4"></div>
<div class="col-4">


</div>
<div class="col-4"></div>



</div>

<div class="row">
    <div class="col-2"></div>
</div>



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









<script src="bootstrap.bundle.min.js"></script>
</body>
</html>