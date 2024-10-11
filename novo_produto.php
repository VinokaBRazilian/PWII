<?php include "cabecalho.php"; ?>
 
<?php
    if (isset ( $_POST["nome"] )
        && isset ( $_POST["valor"])
        && isset ( $_POST["codigobarras"])
        && isset ( $_POST["datavalidade"])
        )
    {
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
            include "conexao.php";
            
            $nome = $_POST["nome"];
            $valor = str_replace( ",", ".", $_POST["valor"] );
            $codigobarras = $_POST["codigobarras"];
            
            $query = "INSERT INTO produtos(DESCRICAO, VALOR, CODIGO_BARRAS, ATIVO)
             VALUES('$nome', $valor, '$codigobarras', 1)";

             $resultado = $conexao->query($query);
             if($resultado)
             {
                echo "<div class='alert alert-success'>
                Salvo no banco com sucesso
                </div>";
             }
             else
             {
echo "<div class='alert alert-danger'>
Ocorreu um erro ao salvar
</div>";

             }

            //Executa a lógica do programa
            //Salvar no banco
          
        }
    }
    else
        {
            $nome = "";
            $valor = "";
            $codigobarras = "";
            $datavalidade = "";
        }
 
?>
<br>
 <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
            Cadastrar novo produto
            </div>

    <div class="card-body">
            <form action="novo_produto.php" method="post">
    </form>
       
    
    <br>

 

         <div class="col-12">
         <label>Nome</label>
         <input class="form-control" type="text" name="nome" value="<?php echo $nome; ?>"/>
         <br>
         </div>

            <div class="col-12">
            <label>Valor</label>
            <input class="form-control" type="number" name="valor" value="<?php echo $valor; ?>"/>
            </div>

            <br>
     
        <div class="col-12">       
        <label>Código de Barras</label>
        <input class="form-control" type="text" name="codigobarras" value="<?php echo $codigobarras; ?>"/>
        <br> 
        <label>Data de Validade</label>
        <input class="form-control" type="date" name="datavalidade" value="<?php echo $datavalidade; ?>" />
        <br>
        </div>
            
  
    <button type='submit' class='btn btn-success'>
        Enviar os Dados
    </button>
 
   
</form>
 

</div>
</div>  
<?php include "rodape.php"; ?>