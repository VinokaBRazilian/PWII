<?php include "cabecalho.php"; ?>

<?php
    if(isset($_POST["Descricao"]) 
         
      )
    {
        

        if(empty($_POST["Descricao"]) )
        {
            echo "<br><div class='alert alert-danger'>
                    Campo descricao não pode estar em branco
                    </div>";
        }
        else
        {
            include "conexao.php";
            
            $Descricao = $_POST["Descricao"];
           

            $query = "INSERT INTO permissoes (Descricao)
            
                     VALUES ( '$Descricao') ";

            $resultado = $conexao->query($query);

            if($resultado)
            {
                echo "<div class='alert alert-success'>
                         Salvo no banco com sucesso 
                      </div>" ;
            }else{
                echo "<div class='alert alert-danger'>
                         Ocorreu algum erro ao salvar
                      </div>" ;
            }

            //Executa a lógica do programa
            //salvar no banco   
           
        }
        
    }else{
        $Descricao = "";
           }
?>
<br>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Cadastrar nova permissao
            </div>
            <div class="card-body">
                <form action="novas_permissoes.php" method="post">
                    <label>Descricao</label>
                    <input class="form-control" type="text" name="Descricao" value="<?php echo $Descricao; ?>" />
                    <br>
                    <button type='submit' class='btn btn-success'>
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>    


    </div>
    <div class="col-4"></div>
</div>
<?php include "rodape.php"; ?>