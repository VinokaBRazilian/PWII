<?php include "cabecalho.php" ?>

<?php

if( isset($_GET["pesquisa"]) )
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa) )
    {
       //Se a variavel estiver vazia executa aqui 
       include "conexao.php";
       $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem from Produtos order by Id asc";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
    }
    else
    {
        //Aqui vai a lógica da pesquisa
        include "conexao.php";
        $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem 
                from Produtos  
                where Descricao like '%$pesquisa%' || Codigo_Barras = '$pesquisa'
                order by Id asc";
        $resultado = $conexao->query($sql);
        
        $conexao->close();
    }
}
else
{
    $pesquisa = "";
    include "conexao.php";
    $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem from Produtos order by Id asc";
    $resultado = $conexao->query($sql);   
    $conexao->close();
    
}


?>


<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Categorias
            </div>
            <div class="card-body">
                <div class="row">                    
                    <div class="col-12">
                        <form action="produtos.php" method="post">
                            <div class="input-group mb-3">
                                <input type="text" 
                                        name="pesquisa" 
                                        value="<?php echo $pesquisa; ?>"  
                                        class="form-control" 
                                        placeholder="Pesquise pela categoria..." />


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
                                <th scope="col">Categoria</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Valor</th>                                
                                <th scope="col">Imagem</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            if ($resultado->num_rows > 0) {
                                while($row = $resultado->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["Id"] . "</td>";
                                    echo "<td>" . $row["Descricao"] . "</td>";
                                    echo "<td>" . $row["Valor"] . "</td>";                                   
                                    echo "<td>" . $row["Imagem"] . "</td>";                                    
                                    echo "</tr>";
                                }
                            } else {
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



<?php include "rodape.php" ?>