<?php include "cabecalho.php"; ?>

<h1> Funções Nativas</h1>
<p>Funções nativas são fuções que o próprio php
    nos fornece, como  por exemplo:
        a função isset(), // Verifica se existe a variável
        a função empty(), // Verifica a variável está vazia
        a função cout(), // Conta quantos itens tem o array
        a função include"", // Inclui um arquivo dentro do outros
        a função echo"", // Imprime na tela
        a função strlen(), // Conta quantos caracteres tem uma string
        a função explode(),// Cria um array a partir de uma frase
        a função replace(),// Troca caracteres dentro de uma string
   

<?php
    echo"<h1>";
    echo date ("H:i:s");
    echo "</h1>";
?>
Ano - Mes- Dia

55555
<?php
    echo"<h1>";
    echo date ("Y-m-d");
    echo "</h1>";
?>

Função getdate()
<?php
    echo"<pre>";
    print_r (getdate());
    echo "</pre>";
?>

<?php
    echo"<h1>";
    $array_data = getdate();
    echo $array_data ["mday"]."/".$array_data["mon"]."/".$array_data["year"];
    echo "</h1>";

    echo"<h1>";
    echo rand (5,15);
    echo "</h1>";
?>

<h1> Funções Personalizadas</h1>



<script src="bootstrap.bundle.min.js"></script/>
</body>
</html>