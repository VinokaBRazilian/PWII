<?php include "cabecalho.php" ?>

<?php include "cabecalho.php"; ?>

<?php
    if (isset ( $_POST["nome"] )
        )
    {

        if (empty($_POST["nome"])) 
        {
            echo "<br><div class='alert alert-danger'>Campo Nome não pode estar em branco!</div>";
        }
        else
        {
            include "conexao.php";

            $nome = $_POST["nome"];
            
            $query = "INSERT INTO categorias (nome) 
            
                    VALUES ( '$nome')";

            $resultado = $conexao->query($query);

            if ($resultado)
            {
                echo "<div class = 'alert alert-success'> Salvo no Banco com sucesso! </div>";
            }
            else
            {
                echo "<div class = 'alert alert-danger'> Ocorreu algum erro ao salvar! </div>";
            }

            //Executa a lógica do programa
            //Salvar no banco
        }
    }
    else
        {
            $nome = "";
        }

?>

<div class="row">

        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Cadastrar nova categoria
                </div>
                <div class="card-body">
                    <form action="novo_categorias.php" method="post">

                        <label>Nome</label>
                        <input scope="row" class="form-control" type="text" name="nome" value="<?php echo $nome; ?>"/>
                        <br>
                        
                        <button type='submit' class='btn btn-success'>
                            Enviar os Dados
                        </button>
                    </form>
                </div>
            </div>


        </div>
        <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>







<?php include "rodade.php" ?>