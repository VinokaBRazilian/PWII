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