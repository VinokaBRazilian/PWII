<?php include "cabecalho.php"; ?> <!-- Inclui o cabeçalho da página, com navegação e estilo padrão -->

<?php 
// Verifica se a variável 'pesquisa' foi passada via GET (ou seja, se o usuário fez uma busca)
if (isset($_GET["pesquisa"])) {
    $pesquisa = $_GET["pesquisa"];

    // Se a pesquisa estiver vazia, executa a consulta padrão (sem filtro de pesquisa)
    if (empty($pesquisa)) {
        include "conexao.php"; // Inclui o arquivo de conexão com o banco de dados
        
        // Consulta para listar todos os produtos, sem filtro de pesquisa
        $sql = "SELECT P.Id, P.Descricao, P.Valor, P.Codigo_barras, P.Imagem, P.Categoria_Id, C.Nome
                FROM Produtos P LEFT JOIN Categorias C ON (P.Categoria_Id = C.id)
                ORDER BY P.Id DESC";
        $resultado = $conexao->query($sql); // Executa a query
        
        $conexao->close(); // Fecha a conexão com o banco de dados
    }
    // Caso a pesquisa tenha um valor, executa a lógica da pesquisa
    else {
        include "conexao.php"; // Inclui o arquivo de conexão
        
        // Consulta para buscar produtos que correspondam à descrição, código de barras ou nome da categoria
        $sql = "SELECT P.Id, P.Descricao, P.Valor, P.Codigo_barras, P.Imagem, P.Categoria_Id, C.Nome 
                FROM Produtos P LEFT JOIN Categorias C ON (P.Categoria_Id = C.id) 
                WHERE P.Descricao LIKE '%$pesquisa%' 
                OR P.Codigo_Barras LIKE '%$pesquisa%' 
                OR C.Nome LIKE '%$pesquisa%' 
                ORDER BY P.Id DESC";
        $resultado = $conexao->query($sql); // Executa a query
        
        $conexao->close(); // Fecha a conexão
    }
}
// Caso a variável 'pesquisa' não exista (quando a página é carregada sem busca)
else {
    $pesquisa = ""; // Inicializa a variável 'pesquisa' como vazia
    
    include "conexao.php"; // Inclui o arquivo de conexão
    
    // Consulta para listar todos os produtos, sem filtro
    $sql = "SELECT P.Id, P.Descricao, P.Valor, P.Codigo_barras, P.Imagem, P.Categoria_Id, C.Nome 
            FROM Produtos P LEFT JOIN Categorias C ON (P.Categoria_Id = C.id)
            ORDER BY P.Id DESC";
    $resultado = $conexao->query($sql); // Executa a query
    
    $conexao->close(); // Fecha a conexão
}
?>

<br>
<?php
// Verifica se há uma mensagem de erro passada via GET e exibe-a
if (isset($_GET["erro"]) && !empty($_GET["erro"])) {
    echo "<div class='alert alert-danger'>";
    echo $_GET["erro"]; // Exibe o erro
    echo "</div>";
}
?>
<br>

<!-- Estrutura da página para exibir a lista de produtos -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Lista de Produtos
            </div>
            <div class="card-body">
                
                <!-- Linha para o botão de "Novo Produto" e o campo de pesquisa -->
                <div class="row">
                    <div class="col-2">
                        <a href="novo_produto.php" class="btn btn-success">
                            Novo Produto <!-- Botão para cadastrar um novo produto -->
                        </a>
                    </div>
                    
                    <div class="col-8">
                        <form action="produtos.php" method="get">
                            <div class="input-group mb-3">
                                <!-- Campo de pesquisa -->
                                <input type="text" 
                                       name="pesquisa" 
                                       value="<?php echo $pesquisa; ?>"  
                                       class="form-control" 
                                       placeholder="Digite sua pesquisa aqui..." />
                                <!-- Botão de envio da pesquisa -->
                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-2"></div> <!-- Espaçamento para centralizar -->
                </div>

                <!-- Tabela para exibir a lista de produtos -->
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Código de barras</th>
                                    <th scope="col">Imagem</th>                                
                                    <th scope="col">Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // Verifica se há registros no resultado da query
                                if ($resultado->num_rows > 0) {
                                    // Exibe cada linha de resultado
                                    while($row = $resultado->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["Id"] . "</td>";
                                        echo "<td>" . $row["Descricao"] . "</td>";
                                        echo "<td>" . "R$" .$row["Valor"] . "</td>";
                                        echo "<td>" . $row["Codigo_barras"] . "</td>";
                                        echo "<td>" . $row["Imagem"] . "</td>";
                                        echo "<td>" . $row["Nome"] . "</td>";
                                        // Botões para editar ou excluir o produto
                                        echo "<td><a href='editar_produto.php?Id=$row[Id]' class='btn btn-warning'>Editar</a>  ";
                                        echo "<a href='excluir_produto.php?Id=$row[Id]' class='btn btn-danger'>Excluir</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    // Caso não haja resultados, exibe uma mensagem
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

<?php include "rodape.php"; ?> <!-- Inclui o rodapé da página, com informações adicionais -->
