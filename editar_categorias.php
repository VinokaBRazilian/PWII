<?php include "cabecalho.php"; ?>

<?php

    if (isset($_POST['Id']) && !empty($_POST['Id']) &&
        isset($_POST['Nome']) && !empty($_POST['Nome'])) {

            include 'conexao.php';
            $sql = "UPDATE Categorias SET Nome = '$_POST[Nome]' WHERE Id = $_POST[Id]";
            $resultado = $conexao->query($sql);
            if ($resultado) {
                //lógica para mensagem de sucesso
            }                                    
            else {
                //caso o update dê false
            }    
        } 

    if (isset($_GET['Id']) && !empty($_GET['Id'])) {
        include 'conexao.php';
        $sql = "SELECT Id, Nome FROM categorias WHERE Id = $_GET[Id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["Id"];
                    $nome = $row["Nome"];
                }
            }
            else {
                header('location: categorias.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: categorias.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: categorias.php?erro=Nenhum Id informado');
    }
?>

<form action="editar_categorias.php?id=<?php echo $id; ?>"method="post">
    <input name="Id" value="<?php echo $id ?>"/>
    <input name="Nome" value="<?php echo $nome ?>"/>
    <button type="submit">Salvar alterações</button>
</form>

<?php include "rodape.php"; ?>