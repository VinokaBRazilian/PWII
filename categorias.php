<?php include "cabecalho.php"; ?>

<?php
    if(isset ($_GET["pesquisa"]))
    {
        $pesquisa = $_GET["pesquisa"];
        if( empty($pesquisa)) 
        {
            // Se a variável estiver vazia executa aqui
            include "conexao.php";
            $sql = "SELECT Id, Nome FROM categorias ORDER BY Id desc";
            $resultado = $conexao -> query($sql);
            $conexao -> close();
        }
        else
        {
            // Aqui vai a lógica da pesquisa
            include "conexao.php";
            $sql = "SELECT Id, Nome FROM categorias WHERE Nome LIKE '%$pesquisa%' ORDER BY Id desc";
            $resultado = $conexao -> query($sql);
            $conexao -> close();
        }
    }
    else
    {
        $pesquisa = "";
        include "conexao.php";
        $sql = "SELECT Id, Nome FROM categorias ORDER BY Id desc";
        $resultado = $conexao -> query($sql);
        $conexao->close();
    }
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Lista de Categorias
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="novo_categorias.php" class="btn btn-success">
                            Nova Categoria
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="categorias.php" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" class="form-control" placeholder="Digite sua pesquisa aqui...">
                            <button class="btn btn-primary" type="submit">
                                Pesquisar
                            </button>
                        </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome das Categorias</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if ($resultado -> num_rows > 0) 
                                    {
                                        while ($row = $resultado -> fetch_assoc()) 
                                        {
                                            echo "<tr>";
                                            echo "<td>" . $row["Id"] . "</td>";
                                            echo "<td>" . $row["Nome"] . "</td>";
                                            echo "<td><a href = 'editar_categorias.php?Id=$row[Id]' class = 'btn btn-warning' >Editar</a>";
                                            echo "<a href = 'excluir_categorias.php?Id=$row[Id]' class = 'btn btn-danger'>Excluir</a></td>";
                                            echo "</tr>";
                                        }
                                    } 
                                    else 
                                    {
                                        echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                                    }             
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "rodape.php"; ?>