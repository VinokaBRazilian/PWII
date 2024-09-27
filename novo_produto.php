<?php include "cabecalho.php" ?>

<?php>


        $nome = $_POST["nome"];
        $valor = $_POST["valor"];
        $codigobarras = $_POST["codigobarras"];
        $datavalidade = $_POST["datavalidade"];
        if (empty($_POST["nome"]))
        {
            echo "<br><div class='alert alert-danger'>Campo Nome não pode estar em branco!</div>";
        }
        else if (empty($_POST["valor"]))
        {
            echo "<br><div class='alert alert-danger'>Campo Valor não pode estar em branco!</div>";
        }
        else if (empty($_POST["codigobarras"]))
        {
            echo "<br><div class='alert alert-danger'>Campo Código de Barras não pode estar em branco!</div>";
        }
        else if (empty($_POST["datavalidade"]))
        {
            echo "<br><div class='alert alert-danger'>Campo Data de Validade não pode estar em branco!</div>";
        }
        else
        {
            //Executa a lógica do programa
            //Salvar no banco
            echo "<h1>Salvo no Banco com sucesso!</h1>";
        }
    
    else
        {
            $nome = "";
            $valor = "";
            $codigobarras = "";
            $datavalidade = "";
        }


        ?>

<?php include "rodape.php"?>