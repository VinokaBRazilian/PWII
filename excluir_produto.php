<?php 




if(!empty($_GET['Id']) && isset($_GET['Id']))
{
    //Logica da exclusão

    include 'conexao.php';
    $sql = "Delete from Produtos where Id = $_GET[Id]";
    $resultado = $conexao->query($sql);

    if($resultado)
    {
        header('location: produtos.php');

    }
    else
    {

    //Aqui vai a logica caso o delete from nao funcione
    //Aqui fica o mesmo redirecionamento porem com a mensagem de erro

    }

}
else
{

header('location: produtos.php');

}






?>