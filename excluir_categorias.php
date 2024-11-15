<?php

if(!empty($_GET['Id']) && isset($_GET['Id']))
{
include "conexao.php";
$sql= "Delete from Categorias where Id = $_GET[Id]";
$resultado =  $conexao->query($sql);
    if($resultado)
    {
    header('location: categorias.php');

    }
    else
    {
    //Fon Mec Trabson

    }
}
else
{

header('location: categorias.php');

}







?>